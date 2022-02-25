<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php  include(VIEWS.'inc/header.php'); ?>


<h1 class="text-center my-5 py-3">Update Product</h1>
<form class="p-5 border mb-5" method="POST" action="">
<div class="form-group"><label for="reference">References</label>
<input type="text" required class="form-control" name="reference" id="reference" value="<?php echo $update['reference']; ?>">
</div>

<div class="form-group"><label for="nom">Nom</label>
<input type="text" required class="form-control" name="nom" id="nom" value="<?php echo $update['nom']; ?>">
</div>

<div class="form-group"><label for="descriptions">Descriptions</label>
<input type="text" required class="form-control" name="descriptions" id="descriptions" value="<?php echo $update['descriptions']; ?>">
</div>

<div class="form-group"><label for="prix">Prix</label>
<input type="number" required class="form-control" name="prix" id="prix" value="<?php echo $update['prix']; ?>">
</div>

<div class="form-group"><label for="quantite">Quantity</label>
<input type="text" required class="form-control" name="quantite" id="quantite" value="<?php echo $update['quantite']; ?>">
</div>

<div class="form-group"><label for="categorie">Categorie</label>
<input type="text" required class="form-control" name="categorie" id="categorie" value="<?php echo $update['categorie']; ?>">
</div>
</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>