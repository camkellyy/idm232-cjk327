<?php 
$title = "Details";
$header = "Garden Salad";
$headerText = "View the ingredients and recipe steps below!";
include_once 'includes/header.php';
?>

    </header>

    <div class="details-container">
        <div class="overview">
            <div class="overview-line1">
                <h2 class="ingredients-headers">OVERVIEW</h2>
                <p>5 mins | cals. 550</p>
            </div>
            <p class="overview-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not </p>
        </div>

        <div class="ingredients">
            <h2 class="ingredients-headers">INGREDIENTS</h2>

            <div class="ingredients-row1">
                <input type="checkbox" id="ing1" name="ing1">
                <label for="ing1">Lorem Ipsum</label><br>

                <input type="checkbox" id="ing2" name="ing2">
                <label for="ing2">Lorem Ipsum</label><br>

                <input type="checkbox" id="ing3" name="ing3">
                <label for="ing3">Lorem Ipsum</label><br>
            </div>

            <div class="ingredients-row2">
                <input type="checkbox" id="ing4" name="ing4">
                <label for="ing4">Lorem Ipsum</label><br>

                <input type="checkbox" id="ing5" name="ing5">
                <label for="ing5">Lorem Ipsum</label><br>

                <input type="checkbox" id="ing6" name="ing6">
                <label for="ing6">Lorem Ipsum</label><br>
            </div>
        </div>

        <div class="recipe">
            <h2 class="ingredients-headers">RECIPE</h2>

            <div class="step1">
                <h4>Step 1.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>

            <div class="step2">
                <h4>Step 2.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
            </div>

            <div class="step3">
                <h4>Step 3.</h4>
                <p>Lorem Ipsum is simply dummy text</p>
            </div>

            <div class="step4">
                <h4>Step 4.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not</p>
            </div>
        </div>
        </div>


</body>
</html>

<?php 
include_once 'includes/footer.php'; 
?>