<?php
function schoolYearList($sem = null) {
    if ($sem == "Summer" || $sem == "summer") {
        for ($y = date("Y"); $y >= 1990; $y--) {
            if ($y == $sy) {
                echo "<option value='" . $y . "' selected>" . $y . "</option>";
            } else {
                echo "<option value=" . $y . ">" . $y . "</option>";
            }
        }
    } else {
        for ($y = date("Y"); $y >= 1990; $y--) {
            $ey = $y + 1;
            if ($y == $sy) {
                echo "<option value='" . $y . "' selected>" . $y . "-" . $ey . "</option>";
            } else {
                echo "<option value=" . $y . ">" . $y . "-" . $ey . "</option>";
            }
        }
    }
}
?>