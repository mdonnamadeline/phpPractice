<html>
    <head>

    </head>
    <body>
        <h3>Welcome! Here is your Future Evaluation Results </h3> <br /> 
        Your favorite color:
        <br />  <?php 
        $color = $_GET["color"];
        if ($color == "red") {
            echo "Red - You are alert and your life is full of love.";
        } elseif ($color == "black") {
            echo "Black - You are conservative and aggressive.";
        } elseif ($color == "green") {
            echo "Green - Your soul is relaxed and you are laid back.";
        } elseif ($color == "blue") {
            echo "Blue - You are spontaneous and love kisses and affection from the ones you love.";
        } elseif ($color == "yellow") {
            echo "Yellow - You are a very happy person and give good advice to those who are down.";
        }
        ?><br /> <br />
        Your first initial: 
        <br />  <?php 
             $initial = strtoupper($_GET["initial"]); 
             if ($initial >= "A" && $initial <= "K") {
                 echo $initial . " - You have a lot of love and friendships in your life.";
             } elseif ($initial >= "L" && $initial <= "R") {
                 echo $initial . " - You try to enjoy your life to the maximum & your love life is soon to blossom.";
             } elseif ($initial >= "S" && $initial <= "Y") {
                 echo $initial . " - You like to help others and your future love life looks very good.";
             } else {
                 echo "Invalid initial.";
             }
        ?><br /> <br />
        Your month of birth: 
        <br />  <?php 
            $month = $_GET["month"];
            if ($month == "Jan-Mar") {
                echo "January - March: The year will go very well for you and you will discover that you fall in love with someone totally unexpected.";
            } elseif ($month == "Apr-Jun") {
                echo "April - June: You will have a strong love relationship that will not last long but the memories will last forever.";
            } elseif ($month == "Jul-Sep") {
                echo "July - September: You will have a great year and will experience a major life-changing experience for the good.";
            } elseif ($month == "Oct-Dec") {
                echo "October - December: Your love life will not be great, but eventually you will find your soul mate.";
            }
        ?><br /> <br />
        The color you like more: 
        <br /> <?php 
             $color = $_GET["color"];
             if ($color == "black") {
                 echo "Black - Your life will take on a different direction, it will seem hard at the time but will be the best thing for you, and you will be glad for the change.";
             } elseif ($color == "white") {
                 echo "White - You will have a friend who completely confides in you and would do anything for you, but you may not realize it.";
             }
        ?><br /> <br />
        Name of a person of the same sex as yours: 
        <br /> <?php 
            $name = $_GET["name"];
            echo $name . " - This person is your best friend.";
        ?><br /> <br />
        Your favorite number:  
        <br /> <?php 
            $number = $_GET["number"];
            echo $number . " - This is how many close friends you have in your lifetime.";
        ?><br /> <br />
        Do you like flying or driving:  
        <br /> <?php 
          $transport = $_GET["transport"];
          if ($transport == "flying") {
              echo "Flying - You like adventure.";
          } elseif ($transport == "driving") {
              echo "Driving - You are a laid-back person.";
          }
        ?><br /> <br />
        Do you like a lake or an ocean: 
        <br />  <?php 
             $water = $_GET["water"];
             if ($water == "lake") {
                 echo "Lake - You are loyal to your friends and your lover and are very reserved.";
             } elseif ($water == "ocean") {
                 echo "Ocean - You are spontaneous and like to please people.";
             }
        ?><br /> <br />
        Your wish:  
        <br /> <?php 
            $wish = $_GET["wish"];
            echo $wish . " - This wish will come true only if you send this to five people in one hour. Send it to ten people, and it will come true before your next birthday.";
        ?><br />
    </body>
</html>