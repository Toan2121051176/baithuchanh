<?php 
echo "<select>";
for ($day = 1; $day <= 31; $day++) {
    echo "<option value=\"$day\">$day</option>";
}
echo "</select>";

echo "<select>";
for ($month = 1; $month <= 12; $month++) {
    echo "<option value=\"$month\">$month</option>";
}
echo "</select>";


echo "<select>";

for ($year = 1900; $year <= date('Y'); $year++) {
    echo "<option value=\"$year\">$year</option>";
}
echo "</select>";
?>