<?php

/**
 * @name FS
 * @version α1
 * @main FS\FS
 * @api 3.0.0
 * @author ChaNu
 */

namespace FS;



use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\player\PlayerMoveEvent;

class FS extends PluginBase implements Listener{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onMove(PlayerMoveEvent $event)
    {
        $player = $event->getPlayer();
        $inv = $player->getInventory()->getItemInHand();
        if($inv->getId() == 288 and $inv->getDamage() == 1)
        {
            $player->sendTip("§l§f가속!!!!");
            $player->addEffect(new EffectInstance(Effect::getEffect(1),10,1,false));
        }

}
    /*public function hand(PlayerItemHeldEvent $event){
        $p = $event->getPlayer();
        $i = $event->getItem()->getId();
        $d = $event->getItem()->getDamage();

        if ($i == 262 and $d == 15){
            $p->sendTip("§l§f가속!!!!");
            $p->addEffect(new EffectInstance(Effect::getEffect(1),10,1,false));
        }
    }
*/
}