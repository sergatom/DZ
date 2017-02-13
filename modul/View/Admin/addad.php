<form method="post">
    <div class="form-group">
        <label for="articleName">Имя товара</label>
        <input name="name" type="text" class="form-control" id="articleName" placeholder="Товар">
    </div>
    <div class="form-group">
        <label for="image">Цена</label>
        <input name="price" type="text" class="form-control" id="image" placeholder="Цена">
    </div>
    <div class="form-group">
        <label for="image">Сайт</label>
        <input name="site" type="text" class="form-control" id="image" placeholder="URL сайта">
    </div>
    <label for="sel1">Выбор положения рекламы на сайте:</label>
    <select class="form-control" id="sel1" name="side">
        <option selected disabled>Выберите сторону</option>
        <option value="Left">Левая сторона</option>
        <option value="Right">Правая сторона</option>
    </select><br>
    <button type="submit" class="btn btn-default">Добавить рекламу</button>
</form>