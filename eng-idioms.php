<?php
    # Program: eng-idioms.php
    #    Date: 23-Apr-2023
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Display random idiom followed by its meaning.

    session_start();
    header("Content-type: text/xml");

    $delay = 60;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/eng-idioms.php";

    $idiom = array(
        "A bitter pill to swallow.", 
        "Something that is unpleasant but must be accepted.",

        "A dime a dozen.", 
        "Anything that is common, inexpensive, and easy to get or available anywhere.",

        "A hot potato.",
        "A controversial issue or situation that is awkward or unpleasant to deal with.",

        "A sandwich short of a picnic.",
      	"Lacking intelligence.",

        "Ace in the hole.",
      	"A hidden or secret strength; an unrevealed advantage.",

        "Achilles' heel.",
      	"A small but fatal weakness in spite of overall strength.",

        "All ears.",
      	"Listening intently; fully focused or awaiting an explanation.",

        "All thumbs.",
      	"Clumsy, awkward.",

        "An arm and a leg.",
      	"Very expensive or costly; a large amount of money.",

        "Apple of discord.",
      	"Anything causing trouble, discord, or jealousy.",

        "Around the clock.",
        "When something is done all day and all night without stopping.",

        "At the drop of a hat.",
        "Without any hesitation; instantly.",

        "Back to the drawing board.",
        "Revising something from the beginning, typically after it has failed.",

        "Back to the grindstone.",
        "Returning to a hard or tedious task.",

        "Ball is in his, her, or your court.",
        "It is up to him, her, or you to make the next decision or step.",

        "Balls to the wall.",
        "Going full throttle; at maximum speed.",

        "Barking up the wrong tree.",
        "Looking in the wrong place.",

        "Basket case.",
        "Being powerless or ineffective, as by nerves, panic, or stress.",

        "Beating a dead horse.",
        "Uselessly dwelling on a subject far beyond its point of resolution.",

        "Beat around the bush.",
        "Speaking about a topic but omiting its main points, often intentionally or to delay or avoid talking about something difficult or unpleasant.",

        "Bed of roses.",
        "A situation or activity that is comfortable or easy.",

        "The bee's knees.",
        "Something or someone outstandingly good, excellent, or wonderful.",

        "Best of both worlds.",
        "A combination of two seemingly contradictory benefits.",

        "Bird brain.",
        "A person who is not too smart; a person who acts stupid.",

        "Bite off more than one can chew.",
        "Taking on more responsibility than one can manage.",

        "Bite the bullet.",
        "Enduring a painful or unpleasant situation that is unavoidable.",

        "Bite the dust.",
        "A euphemism for dying or death.",

        "Bought the farm.",
        "A euphemism for dying or death, especially in an aviation context.",

        "Break a leg.",
        "Wishing good luck to theatre performers before going on stage, due to the belief amongst those in theatre that being wished 'good luck' is a curse.",

        "Burn the midnight oil.",
        "Working late into the night.",

        "Bust one's chops.",
        "Exerting oneself, working hard.",

        "By the length and breadth of something or somewhere.",
        "Emphasizing that it happens everywhere in that place.",

        "By the seat of one's pants.",
        "Achieving through instinct or doing something without advance preparation.",

        "By the skin of one's teeth.",
        "Narrowly; barely. A narrow escape from a disaster.",

        "Call a spade a spade.",
        "Speaking the truth, even to the point of being blunt and rude.",

        "Call it a day.",
        "Declaring the end of a task.",

        "Champ at the bit or chomp at the bit.",
        "Showing impatience or frustration when delayed.",

        "Chew the cud.",
        "Meditating or pondering before answering; deep in thought; ruminating.",

        "Chew the fat.",
        "Chatting idly or generally waste time talking.",

        "Chink in one's armor.",
        "An area of vulnerability.",

        "Clam up.",
        "Becoming silent; stop talking.",

        "Clutch one's pearls.",
        "Being disproportionately shocked or affronted by something one perceives vulgar, in bad taste, or morally wrong.",

        "Cold feet.",
        "Not going through with an action, particularly one which requires long term commitment, due to fear, uncertainty and doubt.",

        "Cold shoulder.",
        "Displaying aloofness and disdain.",

        "Couch potato.",
        "A lazy person.",

        "Cool your jets.",
        "Calm down.",

        "Crocodile tears.",
        "Fake tears or drama tears; fake crying.",

        "Cut off your nose to spite your face.",
        "Pursuing revenge in a way that would damage oneself more than the object of one's anger.",

        "Cut a rug.",
        "Dancing.",

        "Cut the cheese.",
        "Passing gas.",

        "Cut the mustard.",
        "Performing well; meeting expectations.",

        "Dig one's heels in.",
        "Object to some process or action or motion, or actually stop or oppose it strongly.",

        "Don't count chickens before they hatch.",
        "Don't make plans for something that may not happen; alternatively, don't make an assumption about something that does not have a definitively predetermined outcome.",

        "Don't have a cow.",
        "Don't overreact.",

        "Drop a dime.",
        "Making a telephone call; being an informant.",

        "Elephant in the room.",
        "An obvious, pressing issue left unaddressed due to its sensitive nature.",

        "Eleventh hour.",
        "At the last minute; the latest possible time before it is too late.",

        "Fall off the turnip truck.",
        "Being naive, inexperienced, or unsophisticated. Sometimes used in a rural sense.",

        "Fish out of water.",
        "Someone in unfamiliar, and often uncomfortable surroundings.",

        "Fit as a fiddle.",
        "In good physical health.",

        "For a song.",
        "Almost free; very cheap.",

        "Fly in the ointment.",
        "A minor drawback or imperfection, especially one that was not at first apparent, that detracts from something positive, spoils something valuable, or is a source of annoyance.",

        "Fly on the wall.",
        "Joining an otherwise private conversation.",

        "From A to Z.",
        "Covering a complete range; comprehensively.",

        "From scratch.",
        "Making something from original ingredients; starting from the beginning with no prior preparation.",

        "Get bent out of shape.",
        "Taking offense; getting worked up, aggravated, or annoyed.",

        "Get one's ducks in a row.",
        "Becoming well prepared for a desired outcome.",

        "Get your goat.",
        "Irritating someone.",

        "Gone south.",
        "Having an unforeseen or chaotic result.",

        "Grasp the nettle.",
        "Tackling a problem in a bold manner, despite the difficulty or complexity of doing so; solving a problem despite short-term adverse consequences.",

        "Have a blast.",
        "Having a good time; enjoying oneself.",

        "Have all your Christmases come at once.",
        "Having extreme good fortune.",

        "Have eyes bigger than one's stomach.",
        "Having asked for or taken more of something (especially food) than one is actually capable of handling (or eating).",

        "Have eyes in the back of one's head.",
        "Being able to perceive things and events that are outside of one's field of vision.",

        "Head over heels.",
        "Smitten, infatuated.",

        "Heard it through the grapevine.",
        "Having learned something through gossip, hearsay, or a rumor.",

        "Hit the ceiling or roof.",
        "Becoming enraged, possibly in an overreaction.",

        "Hit the nail on the head.",
        "1. Describining exactly what is causing a situation or problem; 2. Doing or saying exactly the right thing or finding the exact answer; 3. Doing something in the most effective and efficient way; 4. Being accurate or correct about something.",

        "Hit the road.",
        "Leaving; starting a journey.",

        "Hit the sack.",
        "Going to bed; going to sleep.",

        "Hit the spot.",
        "Being particularly pleasing or appropriate; being just right.",

        "Hold all the cards.",
        "Controling the situation; being the one making the decisions.",

        "Hold your horses.",
        "Wait. Slow down.",

        "Hook, line and sinker.",
        "Being completely fooled by a deception.",

        "In over one's head.",
        "Difficult to understand; more than one can handle.",

        "It is what it is.",
        "This challenging circumstance is simply a fact, and must accept or deal with.",

        "Jump ship.",
        "Leaving a job, organization, or activity suddenly.",

        "Jump the gun.",
        "Starting something before it is prudent or permitted; acting too hastily.",

        "Kick the bucket.",
        "A euphemism for dying or death.",

        "Kick the habit.",
        "Stop engaging in a habitual practice.",

        "Kill two birds with one stone.",
        "Accomplishing two different tasks at the same time.",

        "Let the cat out of the bag.",
        "Revealing a secret.",

        "Like pulling teeth.",
        "Having difficulty in getting a person or item to act in a desired fashion; refering to a difficult task.",

        "Like turkeys voting for Christmas.",
        "Accepting a situation that will have a negative outcome.",

        "Lit up like a Christmas tree.",
        "Clothes that are too bright or colourful for the occasion.",

        "Look a gift horse in the mouth.",
        "Finding fault with something that has been received as a gift or favor.",

        "Loose cannon.",
        "A person who is uncontrollable and unpredictable, likely to cause damage to everyone around them.",

        "Method to (one's) madness.",
        "Despite one's seemingly random approach, there is actually orderly structure or logic to it.",

        "My two cents.",
        "One's opinion on the subject.",

        "Never put an apple in your rabbit.",
        "Don't do something you know you shouldn't be doing.",

        "Nip it in the bud.",
        "Stopping something at an early stage, before it can develop into something of more significance (especially an obstacle or frustration).",

        "No horse in this race or no dog in this fight.",
        "No vested interest in the outcome of a particular conflict, contest or debate.",

        "Off one's rocker.", 
        "Crazy, demented, out of one's mind, in a confused or befuddled state of mind, senile.",

        "Off the hook.",
        "Escaping a situation of responsibility or obligation, or, less frequently, danger.",

        "Once in a blue moon.",
        "Occurring very rarely.",

        "Own goal.",
        "Doing something accidentally negative against yourself or your own team.",

        "Part and parcel.",
        "Being an integral or essential component of another object.",

        "The pot calling the kettle black.",
        "Someone making an accusation is equally as guilty as those being accused.",

        "Piece of cake.",
        "A job, task or other activity that is pleasant, easy or simple.",

        "Not one's cup of tea.",
        "Not the type of thing the person likes.",

        "Preaching to the choir.",
        "Presenting a side of a discussion or argument to someone who already agrees with it; essentially, wasting your time.",

        "Pull oneself together.",
        "Recovering control of one's emotions.",

        "Pull somebody's leg.",
        "Teasing or joking by telling a lie.",

        "Push the envelope.",
        "Approaching, extending, or going beyond the limits of what is possible.",

        "Pushing up daisies.",
        "A euphemism for dying or death.",

        "Put a spoke in one's wheel.",
        "Disrupting, foiling, or causing problems to one's plan, activity, or project.",

        "Put on airs.",
        "Describing a person who acts superior, or one who behaves as if they are more important than others.",

        "Put the cat among the pigeons.",
        "Creating a disturbance and cause trouble.",

        "Raining cats and dogs.",
        "Raining very hard or strongly.",

        "Right as rain.",
        "Needed, appropriate, essential, or hoped-for; also meaning perfect, well, or absolutely right.",

        "Rock the boat.",
        "Doing or saying something that will upset people or cause problems.",

        "Shoot the breeze.",
        "Chatting idly or casually, without any serious topic of conversation.",

        "Shooting fish in a barrel.",
        "Frivolously performing a simple task.",

        "Screw the pooch.",
        "Screwing up; Failing in dramatic and ignominious fashion.",

        "Sleep with the fishes.",
        "Being murdered and thrown into a body of water.",

        "Speak of the devil.",
        "Used when an object of discussion unexpectedly becomes present during the conversation.",

        "Spill the beans.",
        "Revealing someone's secret.",

        "Spin one's wheels.",
        "Expelling much effort for little or no gain.",

        "Stay in one's lane.",
        "Avoiding interfering with, passing judgement on, or giving unsolicited advice about issues beyond one's purview or expertise; Minding one's own business.",

        "Step up to the plate.",
        "Delivering beyond expectations.",

        "Stick out like a sore thumb.",
        "Something that is clearly out of place.",

        "Straw that broke the camel's back.",
        "The last in a line of unacceptable events; the final tipping point in a sensitive situation.",

        "Take a shine.",
        "Developing a liking or fondness for someone or something.",

        "Take (or grab) the bull by the horns.",
        "Dealing bravely and decisively with a difficult, dangerous, or unpleasant situation; Dealing with a matter in a direct manner, especially to confront a difficulty rather than avoid it.",

        "Take the cake.",
        "Being especially good or outstanding. Alternatively, Being particularly bad, objectionable, or egregious.",

        "Take with a grain of salt.",
        "Not taking what someone says too seriously; treating someone's words with a degree of skepticism.",

        "Throw stones in glass houses.",
        "Someone who is vulnerable to criticism regarding a certain issue should not criticize others about the same issue.",

        "Throw the baby out with the bathwater.",
        "Discarding, especially inadvertently, something valuable while in the process of removing or rejecting something unwanted.",

        "Throw under the bus.",
        "Betraying or sacrificing someone for selfish reasons.",

        "Through thick and thin.",
        "In both good and bad times.",

        "Thumb one's nose.",
        "Expressing scorn or disregard.",

        "Tie one on.",
        "Getting drunk.",

        "To steal someone's thunder.",
        "Preempting someone and robbing them of gravitas or attention. Taking credit for something someone else did.",

        "Trip the light fantastic.",
        "Dancing.",

        "Two a penny.",
        "Cheap or common.",

        "Under my thumb.",
        "Under my control.",

        "Under the weather.",
        "Feeling sick or poorly.",

        "The whole nine yards.",
        "Everything; going all the way.",

        "Wild goose chase.",
        "A frustrating or lengthy undertaking that accomplishes little.",

        "Wolf something down.",
        "Devour (food) greedily.",

        "You can say that again.",
        "That is very true; expression of wholehearted agreement.");

    $count = 150;

    function FisherYatesIndex($n) {

        # Create array of n elements containing indexes.
        $arr = [];

        for ($i = 0; $i < $n; $i++)
            $arr[$i] = $i;

        # Perform index shuffle.
        for($i = $n - 1; $i > 0; $i--) {
            $r = rand(0, $i); $tmp = $arr[$i];
            $arr[$i] = $arr[$r];
            $arr[$r] = $tmp; }

        return $arr; }

    # Recall prior variable state
    $id = $_SESSION['id'] ?? "";                # App name.

    # Prevent data corruption to next application.
    if ($id == "eng-idioms") {
        $lastCmd = $_SESSION['cmd'] ?? 0;       # User command.
        $mode = $_SESSION['mode'] ?? 0;         # Current mode.
        $ndx = $_SESSION['ndx'] ?? 0;           # Current index.
        $rndNdx = $_SESSION['rndNdx'] ?? 0;     # Random index.
        $update = $_SESSION['update'] ?? 0; }   # Time from prior page update.
    else {
        $mode = 0;
        $ndx = 0;
        $rndNdx = FisherYatesIndex($count); 
        $update = 0; }

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;

    # Check page refresh delay.
    if (time() - $update < $delay)

        # Process user request based on the key pressed.	
        switch($cmd) {

        case 1 : # mode
            $mode = ++$mode % 2;
            break;

        case 2 : # previous
            if (--$ndx < 0)
                $ndx = $count - 1;

            $mode = 0;
            break;

        case 3 : # next
            if (++$ndx == $count)
                $ndx = 0;

            $mode = 0;
            break;
        }

    else {
        # Advance to next item after displaying answer.
        $ndx = ++$ndx % $count;
		$mode = 0; }

    # Update the indexes on both fields.
    $i = $rndNdx[$ndx] * 2;
    $j = $i + 1;

    switch($mode) {

    case 0 : # Item
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>English Idioms - Expression</Title>\n";
        echo "  <Text>$idiom[$i]</Text>\n";

        $label = "More";
        $msg = "";
        break;

    case 1 : # Example
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>English Idioms - Explained</Title>\n";
        echo "  <Text>$idiom[$j]</Text>\n";

        $label = "Back";
        $msg = "Use arrows to view all text.";
        break;
    }

    echo "  <SoftKeyItem>\n";
    echo "    <Name>$label</Name>\n";
    echo "    <URL>$urlPath?key=1</URL>\n";
    echo "    <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Prev</Name>\n";
    echo "    <URL>$urlPath?key=2</URL>\n";
    echo "    <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Next</Name>\n";
    echo "    <URL>$urlPath?key=3</URL>\n";
    echo "    <Position>3</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Exit</Name>\n";
    echo "    <URL>SoftKey:Exit</URL>\n";
    echo "    <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>$msg</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "eng-idioms";
    $_SESSION['cmd'] = $cmd;
    $_SESSION['mode'] = $mode;
    $_SESSION['ndx'] = $ndx;
    $_SESSION['rndNdx'] = $rndNdx;
    $_SESSION['update'] = time();
?>
