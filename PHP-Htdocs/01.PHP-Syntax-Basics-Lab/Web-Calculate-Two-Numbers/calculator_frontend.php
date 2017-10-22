<form method="GET">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="substract">Substract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number-one" />
    </div>
    <div>
        Number 2:
        <input type="text" name="number-two" />
    </div>

    <?php if (isset($output)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $output ?>" />
        </div>
    <?php endif; ?>

    <div>
        <input type="submit" name="calculate" value="Calculate" />
    </div>
</form>
