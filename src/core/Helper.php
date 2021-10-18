<?php

class Helper
{
    public static function load($template): string
    {
        ob_start();
        include($template);
        $ret = ob_get_contents();
        ob_end_clean();
        return $ret;
    }

    public static function url(string $uri): string
    {
        $host = getenv('APP_HOST');
        $port = getenv('APP_PORT');
        $context_path = getenv('APP_CONTEXT_PATH');
        return empty($context_path)
            ? "http://$host:$port/$uri"
            : "http://$host:$port/$context_path/$uri";
    }

    public static function assets(string $uri): string
    {
        return self::url("src/assets/$uri");
    }

    public static function isAuthorized(): bool
    {
        return isset($_SESSION['phone']);
    }

    public static function isAdmin(): bool
    {
        return self::isAuthorized() && isset($_SESSION['is_admin']);
    }

    public static function authGuard(): void
    {
        if (self::isAuthorized() || str_contains($_GET['url'], 'login') || str_contains($_GET['url'], 'vaccine-passport')) {
            return;
        }
        self::redirectLogin();
    }

    public static function adminGuard(): void
    {
        if (self::isAdmin() || str_contains($_GET['url'], 'login')) {
            return;
        }
        self::redirectLogin();
    }

    public static function redirectLogin(): void
    {
        if (str_contains($_GET['url'], 'admin')) {
            self::redirect('admin/login');
        } else {
            self::redirect('login');
        }
    }

    public static function redirect(string $uri): void
    {
        header('Location: ' . self::url($uri));
    }

    public static function view(string $view): string
    {
        return "src/views/$view.view.php";
    }

    public static function session(string $key): mixed
    {
        return $_SESSION[$key];
    }

    public static function seed(Model $model, array $data): bool
    {
        if (count($model->findAll()) > 0) {
            return false;
        }
        foreach ($data as $v) {
            $model->insert($v);
        }
        return true;
    }

}