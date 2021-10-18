<?php

class InjectionSite extends Model
{
    protected function getTable(): string
    {
        return 'injection_sites';
    }

    public static function status(int $status): string
    {
        return match ($status) {
            0 => 'Dừng hoạt động',
            1 => 'Đang hoạt động',
        };
    }
    
    public function findAllWithJoin(): bool|array
    {
        $sql = "select
                    i_s.*,
                    mp.name province_name,
                    md.name district_name
                from injection_sites i_s
                join master_province mp on mp.id = i_s.province_id
                join master_district md on i_s.district_id = md.id";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

   public function findWithJoinByID(int $id): bool|array
   {
       $sql = "select
                   i_s.*,
                   mp.name province_name,
                   md.name district_name
               from injection_sites i_s
               join master_province mp on mp.id = i_s.province_id
               join master_district md on i_s.district_id = md.id
               where i_s.id = ? limit 1";
       $stmt = $this->_pdo->prepare($sql);
       $stmt->execute([$id]);
       return $stmt->fetch();
   }

   public static function getFullyInjectionSiteByProfile($profile): string
   {
   $injectionSites = (new InjectionSite())->findWithJoinByID($profile['injection_site_id']);
   return  $injectionSites['name'] . ", " . $injectionSites['district_name'] . ", " . $injectionSites['province_name'];
   }
}