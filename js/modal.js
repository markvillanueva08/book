
        $(document).ready(function () {
            bookList();

        });

        function bookList() {
            $.ajax({
                type: 'get',
                url: "../book/inc/book-list.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
						var id = response[i].id;
                        var title = response[i].title;
                        var isbn = response[i].isbn;
                        var author = response[i].author;
                        var publisher = response[i].publisher;
                        var year_published = response[i].year_published;
						var category = response[i].category;
                        tr += '<tr>';
                        tr += '<td>' + title + '</td>';
                        tr += '<td>' + isbn + '</td>';
                        tr += '<td>' + author + '</td>';
                        tr += '<td>' + publisher + '</td>';
                        tr += '<td>' + year_published + '</td>';
						tr += '<td>' + category + '</td>';
                        tr += '<td><div class="d-flex">';
                     
                        tr +=
                            '<a href="#editBookModal" class="m-1 edit btn btn-primary" data-toggle="modal" onclick=viewBook("' +
                            id +
                            '")>Edit</a>';
                        tr +=
                            '<a href="#deleteBookModal" class="m-1 delete btn btn-primary" data-toggle="modal" onclick=$("#delete_id").val("' +
                            id +
                            '")>Del</a>';
                        tr += '</div></td>';
                        tr += '</tr>';
                    }
                    $('.loading').hide();
                    $('#book_data').html(tr);
                }
            });
        }

        function addBook() {
            var title = $('.add_book #title_input').val();
            var isbn = $('.add_book #isbn_input').val();
            var author = $('.add_book #author_input').val();
            var publisher = $('.add_book #publisher_input').val();
			var year_published = $('.add_book #year_input').val();
			var category = $('.add_book #category_input').val();

            $.ajax({
                type: 'post',
                data: {
                    title: title,
                    isbn: isbn,
                    author: author,
                    publisher: publisher,
					year_published: year_published,
					category: category,
                },
                url: "../book/inc/book-add.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#addbookModal').modal('hide');
                    bookList();
                    alert(response.message);
                }

            })
        }

        function editBook() {
			 var id = $('.edit_book #book_id').val();
             var title = $('.edit_book #title_input').val();
            var isbn = $('.edit_book #isbn_input').val();
            var author = $('.edit_book #author_input').val();
            var publisher = $('.edit_book #publisher_input').val();
			var year_published = $('.edit_book #year_input').val();
			var category = $('.edit_book #category_input').val();

            $.ajax({
                type: 'post',
                data: {
					id : id,
                    title: title,
                    isbn: isbn,
                    author: author,
                    publisher: publisher,
					year_published: year_published,
					category: category,
                },
                url: "../book/inc/book-edit.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#editbookModal').modal('hide');
                    bookList();
                    alert(response.message);
                }

            })
        }

        function viewBook(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "../book/inc/book-view.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('.edit_book #title_input').val(response.title);
                    $('.edit_book #isbn_input').val(response.isbn);
                    $('.edit_book #author_input').val(response.author);
            		$('.edit_book #publisher_input').val(response.publisher);
					$('.edit_book #year_input').val(response.year_published);
					$('.edit_book #category_input').val(response.category);
                    $('.edit_book #book_id').val(response.id);
                    $('.view_book #title_input').val(response.title);
                    $('.view_book #isbn_input').val(response.isbn);
                    $('.view_book #author_input').val(response.author);
            		$('.view_book #publisher_input').val(response.publisher);
					$('.view_book #year_input').val(response.year_published);
					$('.view_book #category_input').val(response.category);
                }
            })
        }

        function deleteBook() {
            var id = $('#delete_id').val();
            $('#deleteBookModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "../book/inc/book-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    bookList();
                    alert(response.message);
                }
            })
        }
  