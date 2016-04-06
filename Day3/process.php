<?php
  session_start();

  if(!isset($_SESSION['number']))
  {
    $_SESSION['number'] = rand(1,100);
  }

  if(isset($_POST['guess']))
  {
    if($_POST['guess'] == $_SESSION['number'])
    {
      $_SESSION['correct'] = "<div class='box green'>
                                <center><p>" . $_SESSION['number'] . " was the number</p></center>
                                <form action='process.php' method='post'>
                                  <input type='hidden' name='reset' value='reset'>
                                  <br>
                                  <center><input type='submit' value='Restart'></center>
                                </form>
                              </div>";
    }
    else if ($_POST['guess'] < $_SESSION['number'])
    {
      $_SESSION['low'] = "<div class='box red'>
                            <center><p>Too Low</p></center>
                          </div>";
    }
    else
    {
       $_SESSION['high'] = "<div class='box red'>
                            <center><p>Too High</p></center>
                          </div>";
    }
  }

  if(isset($_POST['reset']) && $_POST['reset'] == 'reset')
  {
    session_destroy();
    header("Location: numbergame.php");
  }

  header("Location: numbergame.php");

?>
