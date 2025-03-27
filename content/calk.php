<script src="../js/calculator.js"></script>
<div id="radio">
    <strong>Current Exchange</strong>
    <br>
    <input type="radio" name="Choice" id="RE" onclick="Current_Exchange(); Chose_Image();">
    <label for="RE">RUB -> EURO</label>
    <br>
    <input type="radio" name="Choice" id="UE" onclick="Current_Exchange(); Chose_Image();">
    <label for="UE">USD -> EURO</label>
    <br>
    <input type="radio" name="Choice" id="ER" onclick="Current_Exchange(); Chose_Image();">
    <label for="ER">EURO -> RUB</label>
    <br>
    <input type="radio" name="Choice" id="EU" onclick="Current_Exchange(); Chose_Image();">
    <label for="EU">EURO -> USD</label>
</div>
<div id="quantityInput">
    <label for="quantity">How much money do you want to exchange?</label>
    <input type="number" id="quantity" min="1" max="100000" step="1" oninput="Current_Exchange(); Chose_Image();">
    <div id="Answer"></div>
</div>
<img src="" alt="" id="Chose_Image" class="small-image">