
<?php include'../includes/header.php'; ?>
<style media="screen">
table{
    width: 100%;
}
td , #a{
  text-align:center;
  font-style: italic;
  font-size: 24;
}
#image{
  border:2px solid #aaaaaa;
}
</style>

    <table>
      <tr>
        <td colspan="3">
          <h1>CHOOSE ONE CATEGORIES</h1>
        </td>
      </tr>
      <tr>
        <td>
          <div id="image"><a href="chooselv3.php"><img src="..\play\image\fruit1.jpg" alt="FRUIT GAME" width="200" height="200" /></a id="a"></div>
        </td>
        <td>
          <div id="image"><a href="chooselv.php"><img src="..\play\image\logo2.png" alt="LOGO GAME" width="200" height="200" /></a id="a"></div>
        </td>
        <td>
          <div id="image"><a href="chooselv2.php"><img src="..\play\image\color3.png" alt="COLOUR GAME" width="200" height="200" /></a id="a"></div>
        </td>
      </tr>

      <tr>
        <td>
          <a>CATEGORIZE FRUIT</a>
        </td>
        <td>
          <a>CATEGORIZE LOGO</a>
        </td>
        <td>
            <a>CATEGORIZE COLOUR</a>
        </td>
      </tr>
    </table>


<?php include '../includes/footer.php';?>
