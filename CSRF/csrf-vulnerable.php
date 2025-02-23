//Vulnerable 
<form action="transfer.php" method="post">

    <label for="to_account">To Account:</label>
    <input type="text" id="to_account" name="to_account" required>

    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" required>

    <button type="submit">Transfer</button>
</form>
