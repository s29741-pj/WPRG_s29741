<h2 class="p-2">Add new a car</h2>

<form action="index.php" method="POST" class="h-60">
    <div class="w-full h-[60%] flex flex-col justify-between items-center">
        <label for="brand">
            <input placeholder="brand" type="text" name="brand" class="w-90 p-2 border-2 border-gray-200" required>
        </label>
        <label for="model">
            <input placeholder="model" type="text" name="model" class="w-90 p-2 border-2 border-gray-200" required>
        </label>
        <label for="price">
            <input placeholder="price" type="number" step="0.01" min="500" max="10000000" name="price" class=" w-90 p-2 border-2 border-gray-200" required>
        </label>
        <label for="year">
            <input placeholder="year" type="number" name="year" min="1920" max="<?php echo date("Y");?>" class=" w-90 p-2 border-2 border-gray-200" required>
        </label>
        <label for="description">
            <textarea placeholder="description" name="description" class=" w-90 min-h-20 max-h-80 p-2 border-2 border-gray-200"></textarea>
        </label>
        <input type="submit" name="add_car"  class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 mt-2 border-b-4 border-green-700 hover:border-green-500 rounded" value="Dodaj">
    </div>

</form>



