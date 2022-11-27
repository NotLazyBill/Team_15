<?php
echo '

<h1>Products</h1>
<p>View and manage your products</p>

<div class="add-product">
    <ul class="flex cards">
    <li>
        <h2>Add new product</h2>
        <form class="add-product-form">
            <label for="product-name">Name:</label>
            <input type="text" name="product-name" id="product-name" required>
            <label for="product-price">Price: (£)</label>
            <input type="number" name="product-price" id="product-price" required>
            <label for="product-stock">Stock:</label>
            <input type="number" name="product-stock" id="product-stock" required>
            <label for="product-alt" id="product-alt">Alt-Text:</label>
            <input type="text" name="product-alt" id="product-alt" required>

            <label for="product-type">Type:</label>
            <select name="product-type" id="product-type">
                <option value="1">Women&apos;s bracelet</option>
                <option value="2">Women&apos;s necklace</option>
                <option value="3">Women&apos;s earrings</option>
                <option value="4">Women&apos;s ring</option>
                <option value="5">Women&apos;s watch</option>
                <option value="6">Men&apos;s bracelet</option>
                <option value="7">Men&apos;s chain</option>
                <option value="8">Men&apos;s earrings</option>
                <option value="9">Men&apos;s ring</option>
                <option value="10">Men&apos;s watch</option>
            </select>

            <div id="desc-box">
                <label for="desc">Description:</label>
                <textarea name="desc" id="desc" required></textarea>
                <label for="product-img">Select image:</label>
                <input type="file" id="product-img" name="product-img" accept="image/*" required>
            </div>

            <button id="submit-product-form">Add product</button>
      </form>
    </li>
    </ul>
</div>

'?>