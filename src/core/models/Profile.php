<?php

class Profile extends Model
{
    protected function getTable(): string
    {
        return 'profiles';
    }

    public static function gender(int $gender): string
    {
        return match ($gender) {
            0 => 'Nữ',
            1 => 'Nam',
            default => 'Không xác định',
        };
    }
    public static function status(int $status): string
    {
        switch($status){
            case 0:
                return "Đăng kí thành công";
                break;
            case 1:
                return "Chờ khám";
                break;
            case 2:
                return "Chờ tiêm";
                break;
            case 3:
                return "Theo dõi sau tiêm";
                break;
            case 4:
                return "Hoàn thành";
                break;
            case -1:
                return "Hủy tiêm";
                break;
            case -2:
                return "Triệu chứng bất thường";
                break;
            default:
            break;
            }
    }
    public static function getColorbyStatus(int $status): string
    {
        switch($status){
            case 0:
                return "#264653";
                break;
            case 1:
                return "#e76f51";
                break;
            case 2:
                return "#f4a261";
                break;
            case 3:
                return "#2a9d8f";
                break;
            case 4:
                return "#0096c7";
                break;
            case -1:
                return "#d00000";
                break;
            case -2:
                return "#9d0208";
                break;
            default:
            break;
            }
    }
}

abstract class ProfileStatus
{
    const CREATED = 0;
    const CHECKED_IN = 1;
    const SCREENED = 2;
    const INJECTED = 3;
    const COMPLETED = 4;

    const REJECTED = -1;
    const FAILED = -2;
}