
<?php

?>
<div class="container">
    <form class="general" action="#" method="post">
        <h3 style="text-align: center">Update Bus Schedule</h3>
        <div class="contents">
            <label>Bus Number:</label>
            <input class="input-lg" type="number" ><br>
            <label>Driver's Name:</label>
            <input class="input-lg" type="text" placeholder="Driver Name"><br>
            <label>Driver's Number:</label>
            <input class="input-lg" type="tel" placeholder="Driver's tel"><br>
            <label>Number Of Seats:</label>
            <input class="input-lg" type="number" ><br>
            <label>Departure Time:</label>
            <input class="input-lg" type="datetime" ><br>
            <label>Tarrif:</label>
            <input type="text" class="input-lg" placeholder="Charge per Individual"><br>
            <label>Category:</label>
            <select>
                <option>VIP</option>
                <option>Normal Class</option>
            </select><br>


            <input class="btn-primary btn-lg" type="submit" name="submit" value="Update">
        </div>
</div>
    </form>