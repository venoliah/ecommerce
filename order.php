<html>
    <head>
        <title>Fenono Bakaries</title>
    </head>

    <body>
        <h1>Fenono Cakes</h1>
        <form action="order_submit.php" method="post">
            <label for="Food_Item">Food Item: </label>
            <select name="Food_Item" id="Food_Item" >
                <option  >Cakes <img src="https://i.pinimg.com/236x/cb/43/bf/cb43bf1e5b97732422e9f4127966525f.jpg" alt="Image was not fount"></option>
                <option >Cookies <img src="https://i.pinimg.com/564x/ad/db/80/addb804eea76c5380aef9d78b3d17957.jpg" alt="The image was not found"></option>
                <option >Buns <img src="https://i.pinimg.com/564x/62/34/f6/6234f65c019b6b68e02691b14eb3886b.jpg" alt="image not found"></option>
                <option >Dougnuts <img src="https://i.pinimg.com/736x/20/4d/8e/204d8e882628fcc338cd5fc05665ec61.jpg" alt="image not found"></option>
                <option >Croissants <img src="https://i.pinimg.com/236x/fe/8e/39/fe8e39ebf8c236aa06270781ab1f0e31.jpg" alt="image not found"></option>
            </select><br>
      <br><br>
      <label for="Quantity">Quantity: </label>
      <input type="number" id="Quantity" name="Quantity" value="" min="6" max="50" step="6" >
      <br><br>
      <input type="submit" value="ORDER">

            </form>
    </body>
</html>