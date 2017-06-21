<?php 
namespace App\Support;

use App\SysParam as SysParamModel;

class SysParam 
{
    public function get($name)
    {
    	$defaultFromConfig = $this->getDefaultFromConfigFor($name);
    	$setting = SysParamModel::where('name', $name)->first();
    	if (! $setting) {
            return $defaultFromConfig;
        }
    	return empty($setting->plain_value) ? $defaultFromConfig : $setting->plain_value;
    }

    private function getDefaultFromConfigFor($name)
    {
        $defaultConfig = [
            'site_title' 	=> 'Coop-elect',
            'site_acronym' 	=> 'COOP',
            'tally_refresh' => 60,
            'thank_you_msg'	=> 'Thank you.'
        ];
        return $defaultConfig[$name];
    }

}