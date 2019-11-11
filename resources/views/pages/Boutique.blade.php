@extends('layouts.app')

@section('content')


<article>

<section id="top3">

 <!-- Hero Section-->
 <section class="presentation">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-lg-6 d-flex align-items-center">
        <div class="content">
          <h1>BDE CESI</h1>
          <p class="hero-text">La Rochelle</p>
          <p class="hero-text"><strong>Plusieurs produits uniques</strong> pour avoir un max de<strong> flow</strong></p><a href=".big-product" class="buy btn btn-primary">Acheter <i class="icon-shopping-bag"></i></a>
        </div>
      </div>
      <div class="col-lg-6">               
        <div class="image d-none d-lg-block"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/hero-shirt.jpg" alt="t-shirt" class="img-fluid mx-auto d-block"></div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Section-->
<!-- Intro Section-->
<section class="intro">
  <div class="container text-center">
    <h2 class="heading-center">Bienvenue sur la boutique de ton BDE du CESI La Rochelle</h2>
  
  </div>
</section>
<!-- End Intro Section-->
<!-- Features Section-->
<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 info">
        <h2 class="heading-left">Nos incroyable<br>Produits</h2>
        <p class="lead">
         Tu vas pouvoir acheter des tshirts, des sweats, des mugs et même plus encore, tous ça à l'effigie de ton école.
      </div>
      <div class="col-lg-6 items">
        <div class="row">
          <div class="col-md-6 feature">
            <div class="icon"><i class="icon-shirt-and-tie"></i></div>
            <div class="text">
              <h4>Des Design unique</h4>
              <p>Je te jure personne d'autres à les mêmes</p>
            </div>
          </div>
          <div class="col-md-6 feature">
            <div class="icon"><i class="icon-shirt"></i></div>
            <div class="text">
              <h4>Taille des vêtements parfaites</h4>
              <p>Pas comme sur AliExpress hum hum</p>
            </div>
          </div>
          <div class="col-md-6 feature">
            <div class="icon"><i class="icon-badge"></i></div>
            <div class="text">
              <h4>Qualité supérieure</h4>
              <p>Comme le jambon</p>
            </div>
          </div>
          <div class="col-md-6 feature">
            <div class="icon"><i class="icon-price-tag"></i></div>
            <div class="text">
              <h4>Des prix compétitif</h4>
              <p>20 balles le T-Shirt, c'est donné, non ?</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- End Features Section-->

<!-- Product Section-->
<section class="Product">
  <div class="container">
    <div class="row">
      <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/big-product.jpg" alt="t-shirt" class="img-fluid"></div>
      <div class="col-md-8 info">
        <div class="info-wrapper">
          <h2>Le T-Shirt CESI</h2>
          <p class="lead">
            Oui c'est bien lui, LE T-shirt
          </p>
          <ul class="product-info list-unstyled">
            <li class="size">
              <select title="Choisi ta taille" class="selectpicker">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </li>
            <li class="Taille">
              <div class="product-quantity">
                <div class="minus-btn"><i class="icon-android-remove"></i></div>
                <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
                <div class="plus-btn"><i class="icon-android-add"></i></div>
              </div>
            </li>
            <li class="price">20 €</li>
          </ul>
        </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-orange.jpg" alt="t-shirt" class="img-fluid"></div>
      <div class="col-md-8 info">
        <div class="info-wrapper">
          <h2>Le T-Shirt CESI</h2>
          <p class="lead">
            Oui c'est bien lui, LE T-shirt
          </p>
          <ul class="product-info list-unstyled">
            <li class="size">
              <select title="Choisi ta taille" class="selectpicker">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </li>
            <li class="Taille">
              <div class="product-quantity">
                <div class="minus-btn"><i class="icon-android-remove"></i></div>
                <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
                <div class="plus-btn"><i class="icon-android-add"></i></div>
              </div>
            </li>
            <li class="price">20 €</li>
          </ul>
        </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-gray.jpg" alt="t-shirt" class="img-fluid"></div>
    <div class="col-md-8 info">
      <div class="info-wrapper">
        <h2>Le T-Shirt CESI</h2>
        <p class="lead">
          Oui c'est bien lui, LE T-shirt
        </p>
        <ul class="product-info list-unstyled">
          <li class="size">
            <select title="Choisi ta taille" class="selectpicker">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="x-large">X-Large</option>
            </select>
          </li>
          <li class="Taille">
            <div class="product-quantity">
              <div class="minus-btn"><i class="icon-android-remove"></i></div>
              <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
              <div class="plus-btn"><i class="icon-android-add"></i></div>
            </div>
          </li>
          <li class="price">20 €</li>
        </ul>
      </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-blue.jpg" alt="t-shirt" class="img-fluid"></div>
    <div class="col-md-8 info">
      <div class="info-wrapper">
        <h2>Le T-Shirt CESI</h2>
        <p class="lead">
          Oui c'est bien lui, LE T-shirt
        </p>
        <ul class="product-info list-unstyled">
          <li class="size">
            <select title="Choisi ta taille" class="selectpicker">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="x-large">X-Large</option>
            </select>
          </li>
          <li class="Taille">
            <div class="product-quantity">
              <div class="minus-btn"><i class="icon-android-remove"></i></div>
              <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
              <div class="plus-btn"><i class="icon-android-add"></i></div>
            </div>
          </li>
          <li class="price">20 €</li>
        </ul>
      </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-black.jpg" alt="t-shirt" class="img-fluid"></div>
    <div class="col-md-8 info">
      <div class="info-wrapper">
        <h2>Le T-Shirt CESI</h2>
        <p class="lead">
          Oui c'est bien lui, LE T-shirt
        </p>
        <ul class="product-info list-unstyled">
          <li class="size">
            <select title="Choisi ta taille" class="selectpicker">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="x-large">X-Large</option>
            </select>
          </li>
          <li class="Taille">
            <div class="product-quantity">
              <div class="minus-btn"><i class="icon-android-remove"></i></div>
              <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
              <div class="plus-btn"><i class="icon-android-add"></i></div>
            </div>
          </li>
          <li class="price">20 €</li>
        </ul>
      </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-cyan.jpg" alt="t-shirt" class="img-fluid"></div>
    <div class="col-md-8 info">
      <div class="info-wrapper">
        <h2>Le T-Shirt CESI</h2>
        <p class="lead">
          Oui c'est bien lui, LE T-shirt
        </p>
        <ul class="product-info list-unstyled">
          <li class="size">
            <select title="Choisi ta taille" class="selectpicker">
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="x-large">X-Large</option>
            </select>
          </li>
          <li class="Taille">
            <div class="product-quantity">
              <div class="minus-btn"><i class="icon-android-remove"></i></div>
              <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
              <div class="plus-btn"><i class="icon-android-add"></i></div>
            </div>
          </li>
          <li class="price">20 €</li>
        </ul>
      </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
    </div>
  </div>
</div>


  <div class="container">
    <div class="row">
      <div class="col-md-4 product"><img src="https://d19m59y37dris4.cloudfront.net/shirt/2-1-1/img/shirt-pink.jpg" alt="t-shirt" class="img-fluid"></div>
      <div class="col-md-8 info">
        <div class="info-wrapper">
          <h2>Le T-Shirt CESI</h2>
          <p class="lead">
            Oui c'est bien lui, LE T-shirt
          </p>
          <ul class="product-info list-unstyled">
            <li class="size">
              <select title="Choisi ta taille" class="selectpicker">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </li>
            <li class="Taille">
              <div class="product-quantity">
                <div class="minus-btn"><i class="icon-android-remove"></i></div>
                <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
                <div class="plus-btn"><i class="icon-android-add"></i></div>
              </div>
            </li>
            <li class="price">20 €</li>
          </ul>
        </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
      </div>
    </div>
  </div>

<!-- End Product Section-->

</section>


</article>

@endsection