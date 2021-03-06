<?php

namespace Quiver\Alerts;

use pocketmine\Server;
use pocketmine\scheduler\Task;
use pocketmine\utils\TextFormat as C;
use Quiver\Core\QuiverCore;

class AlertTask extends Task {

    public function __construct(QuiverCore $plugin){
        $this->plugin = $plugin;
    }

    public function onRun($currentTick){
        $input = array(
        "Right now, you are seeing this message.",
        "More features soon!",
        "Check out Our app to buy ranks and register on the forums!",
        "Hope you have Fun!",
        "Hacking is NOT allowed , Disable client mods before playing",
        "You will always be by my side, oh sorry I was singing",

        "We know are server is not perfect we will always try to improve :)",
        "Any Ideas for the server? Be sure to get in touch!",
        "It works better if you plug it in.",
        "I have not lost my mind, it's backed up on disk",
        "Thanks for playing!",

        "Buy ranks on our app to support us!",
        "Having fun?",
        "Do witches use Spell Check?",
        "With Great power, Comes Great Electricity Bil",
        "Everyone has good qualities",

        "I think my IPhone is broken, I pressed the home button and I'm still at work",
        "Sometimes we all have those lazy moments",
        "Lazy Rule: if I can't Reach it, Then I do not need it",
        "Follow your heart, But Take your brain with you",
        "Nothing is as easy as it looks.",

        "Everything takes longer than you think.",
        "Whenever possible blame the Hardware",
        "Pirated software comes with a treasure map",
        "Moderators can be annoying sometimes, but we all love them :)",
        "What brings you here today?",

        "Do not ask to be Moderator",
        "Need Help? Try typing /help",
        "Invite your friends to play :)",
        "Thank you for helping us Grow",
        "Speak kindly to one another",

        "Proofread carefully to see if you any words out!",
        "Some days you're the windshield, some days the bug",
        "We're lost but we're making good time",
        "What if there were no hypothetical questions?",
        "What was the best thing Before sliced bread?",

        "You used to be indecisive. Now you're not sure",
        "You will become rich and famous unless you don't",
        "You will never be younger then you are today..",
        "Sometimes you might not be the best at PvP, But remember there is always someone worse at PvP than you",
        "Never leave your Guard down"
        );
        $messages = array_rand($input);
	Server::getInstance()->broadcastMessage(C::GRAY . $input[$messages]);
    	}
}
