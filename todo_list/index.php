<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body>

    <div class="container"> 
        <div id="todo">
            <form id="todoForm">
                <fieldset>
                    <label for="todoTitle">Title</label>
                    <input name="todoTitle" id="todoTitle" type="text">
                </fieldset>
                <fieldset>
                    <label for="todoContent">Content</label>
                    <textarea name="todoContent" id="todoContent"></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="button" id="insert" onclick='clearForm(this.form);'>ADD TASK</button>
                </fieldset>
            </form>
        </div>
        <div id="todoList">
        </div>
    </div>


<script>
    
    
    // Fetch the content locally stored in browser's memory
    // Initiate empty arrays if no content exists
    function get_titles() {
        var titles = new Array,
            titles_str = localStorage.getItem('titles');
        if (titles_str !== null) {
            titles = JSON.parse(titles_str); // JSON string to JavaScript
        }
        return titles;
    }

    function get_messages() {
        var messages = new Array,
            messages_str = localStorage.getItem('messages');
        if (messages_str !== null) {
            messages = JSON.parse(messages_str);
        }
        return messages;
    }

    // Get form input and push it into arrays
    // get_titles & get_messages retrieve data from browser's memory 
    function add() {
        var title = document.getElementById('todoTitle').value,
            content = document.getElementById('todoContent').value,
            titles = get_titles(),
            messages = get_messages();

        titles.push(title);
        messages.push(content);

        localStorage.setItem('titles', JSON.stringify(titles));
        localStorage.setItem('messages', JSON.stringify(messages));
     
        show();
     
        return false;
    }

    // Retrieve ID of a selected remove link. This ID is an index of a relevant item. Remove item with matching index (splice)  
    function remove() {
        var id = this.getAttribute('id'),
            titles = get_titles(),
            messages = get_messages();

        titles.splice(id, 1);
        messages.splice(id, 1);
        localStorage.setItem('titles', JSON.stringify(titles));
        localStorage.setItem('messages', JSON.stringify(messages));
     
        show();
     
        return false;
    }

    // Display data stored in browser's memory 
    function show() {
        var titles = get_titles(),
            messages = get_messages(),
            removeTodo = document.getElementsByClassName('remove'),
            html = '<ul id="tasksList">';

        for(var i=0; i<titles.length; i++) {
            html += '<li>' + '<h3>' + titles[i] + '</h3>' + '<p>' + messages[i] + '</p>' + '<hr/>' + '<a href="" class="remove" id="' + i  + '">DELETE</a></li>';
        };
        html += '</ul>';
     
        document.getElementById('todoList').innerHTML = html;

        for (var i=0; i < removeTodo.length; i++) {
            removeTodo[i].addEventListener('click', remove);
        };

        return false;
    }


    document.getElementById('insert').addEventListener('click', add);
    show();

</script>




 
    <!-- Footer -->
    <footer>
        <?php include('include/footer.php') ?>
    </footer>

<?php //include('include/scripts.php') ?>


</body>

</html>
