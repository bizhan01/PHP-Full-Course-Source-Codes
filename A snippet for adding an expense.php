<?php
// Add an expense
$expense = new Expense($_POST['amount'], $_POST['category']);
$financeApp->addExpense($expense);
echo "Expense added successfully.";
?>
