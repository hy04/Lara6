<?php namespace heyang\Resources;

use System\Classes\PluginBase;
class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name'=>'heyang',
      'description'=>'Provides company resources',
      'author'=>'He Yang',
      'icon'=>'icon-leaf'
    ];
  }
  public function registerComponents()
  {
    return [
      '\Heyang\Resources\Components\Links'=>'resourcesLinks'
    ];
  }
}


 ?>
