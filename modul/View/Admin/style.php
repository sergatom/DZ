<form method="post">
    <label for="sel1">Выберите цвет шапки сайта:</label>
    <select class="form-control" id="sel1" name="head">
        <option selected disabled>Выберете цвет шапки сайта</option>
        <?php foreach ($data['head'] as $key => $value){?>
            <option value="<?php echo $value?>"><?php echo $key?></option>
        <?php }?>
    </select>
    <button type="submit" class="btn btn-default">Изминить цвет шапки</button>
</form>
<form method="post">
    <label for="sel1">Выберите цвет фона сайта:</label>
    <select class="form-control" id="sel1" name="back">
        <option selected disabled>Выберите цвет фона сайта</option>
        <?php foreach ($data['back'] as $key => $value){?>
            <option value="<?php echo $value?>"><?php echo $key?></option>
        <?php }?>
    </select>
    <button type="submit" class="btn btn-default">Изменить цвет фона</button>
</form>