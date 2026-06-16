<!DOCTYPE html>
<html>
<head>
    <title>Web Kopi Shopping Cart</title>
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"/>
    <!-- link CSS -->
	<link href="<?= base_url('css/style3.css') ?>" type="text/css" rel="stylesheet" />
    <!-- feater icons --> 
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- boxicon icons --> 
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
</head>
<body>
<!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi <span>Jadi</span>.</a>

      <div class="navbar-nav">
        <a href="/#home">Home</a>
        <a href="/#about">Tentang Kami</a>
        <a href="/Menu">Menu</a>
        <a href="/Contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="/Produk" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
<!-- Navbar end -->

<!-- Sehopping-Cart start -->
<div id="shopping-cart">
    <h2><div class="txt-heading">Shopping Cart</div></h2>
    <a id="btnEmpty" href="<?= site_url('DBKopi?action=empty') ?>">Empty Cart</a>
    <?php if (!empty($cart)): ?>
        <!-- <form action="https://formspree.io/f/xnnaqnoy" method="POST"> -->
            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th style="text-align:left;">Name</th>
                        <th style="text-align:center;">Code</th>
                        <th style="text-align:center;" width="5%">Quantity</th>
                        <th style="text-align:center;" width="10%">Unit Price</th>
                        <th style="text-align:center;" width="15%">Price</th>
                        <th style="text-align:center;" width="5%">Remove</th>
                    </tr>    
                    <?php
                    $total_quantity = 0;
                    $total_price = 0;
                    foreach ($cart as $item):
                        $item_price = $item['quantity'] * $item['price'];
                        ?>
                        <tr>
                            <td><img src="<?= base_url($item['image']) ?>" class="cart-item-image" /><?= $item['name'] ?></td>
                            <td><?= $item['code'] ?></td>
                            <td style="text-align:right;"><?= $item['quantity'] ?></td>
                            <td style="text-align:right;">Rp <?= $item['price'] ?></td>
                            <td style="text-align:right;">Rp <?= number_format($item_price, 2) ?></td>
                            <td style="text-align:center;"><a href="<?= site_url('DBKopi?action=remove&code=' . $item['code']) ?>" class="btnRemoveAction"><img src="<?= base_url('icon-delete.png') ?>" alt="Remove Item" /></a></td>
                        </tr>
                        <?php
                        $total_quantity += $item['quantity'];
                        $total_price += $item_price;
                    endforeach;
                    ?>
                    <tr>
                        <td colspan="2" align="right">Total:</td>
                        <td align="right"><?= $total_quantity ?></td>
                        <td align="right" colspan="2"><strong>Rp <?= number_format($total_price, 2) ?></strong></td>
                        <td><a href="/"><input type="submit" value="Kirim"></td></a>
                    </tr>
                </tbody>
            </table>
        <!-- </form> -->
    <?php else: ?>
        <div class="no-records">Your Cart is Empty</div>
    <?php endif; ?>
</div>

<div id="product-grid">
    <h2><div class="txt-heading">Products</div></h2>
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $product): ?>
            <div class="product-item">
                <form method="post" action="<?= site_url('DBKopi?action=add&code=' . $product['code']) ?>">
                    <div class="product-image"><img src="<?= base_url($product['image']) ?>"></div>
                    <div class="product-tile-footer">
                        <div class="product-title"><?= $product['name'] ?></div>
                        <div class="product-price">Rp <?= $product['price'] ?></div>
                        <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<!-- Shopping Cart end -->
</body>
</html>
