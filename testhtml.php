
    <?php require('header.php') ?>

    <main>

    <div class="">
    <?php echo "ovo je prvi cas phpa"; ?>
    </div>
    <?php
      $arr = array(1 => "Petar petrovic", 2 => "Milos Milosevic", 3 => "Jovan Jovanovic");
     ?>

     <h1>PHP lista</h1>
     <ul>
       <?php
       foreach ($arr as $key => $value) {
         echo "<li>$key. $value</li>";
       }
        ?>
       <li>1. Petar petrovic</li>
       <li>2. Milos Milosevic</li>
       <li>3. Jovan Jovanovic</li>
     </ul>


     <h1>HTML lista</h1>
    <ul>
      <li>1. Petar petrovic</li>
      <li>2. Milos Milosevic</li>
      <li>3. Jovan Jovanovic</li>
    </ul>


    <table style="border:1px solid black;">
      <thead>
        <th>Index</th>
        <th>Ime i Prezime</th>
      </thead>
      <tbody>
      <?php
      foreach ($arr as $key => $value) {
         echo "<tr> <td>$key</td> <td>$value</td>  </tr>";
      }
       ?>
      </tbody>
    </table>

    </main>

    <?php require('footer.php') ?>
