<!DOCTYPE html>
<html lang="fr">
  <head>

    <?php include_once "../app/views/templates/partials/_head.php"; ?>

  </head>
<body>
    
      <header>
            <?php include_once "../app/views/templates/partials/_header.php"; ?>
      </header>

      <main>
            <?php echo $random ?>

            <?php echo $lastAdded ?>
      </main>

      <footer>  

        <?php include_once "../app/views/templates/partials/_footer.php"; ?>


      </footer>

</body>
</html>