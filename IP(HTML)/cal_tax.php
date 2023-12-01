<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $grossPay = $_POST["grossPay"];
            $rent = $_POST["rent"];
            $pension = $_POST["Pension"];
            $insurance = $_POST["Health Insurance"];

            // Add code to get other input values

            $netTaxableIncome = ($grossPay * 12) - ( $rent* 12) - ($pension* 12) - (insurance* 12);
            $tax = 0;
            if ($netTaxableIncome > 1000000) {
                $tax = 112500 + 0.3 * ($netTaxableIncome - 1000000);
            } elseif ($netTaxableIncome > 500000) {
                $tax = 12500 + 0.2 * ($netTaxableIncome - 500000);
            } elseif ($netTaxableIncome > 250000) {
                $tax = 0.05 * ($netTaxableIncome - 250000);
            }

            echo "Income Tax: " . number_format($tax, 2);
        }
        ?>
