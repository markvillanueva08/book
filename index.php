<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Book list</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	 <link rel="stylesheet" href="..\book\css\style.css">
    <style>

    </style>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                   
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <a href="#addBookModal" class="btn btn-success" data-toggle="modal">
                                   <span>Add New Book</span></a>
                        </div>
                    </div>
                </div>
                <table class="table  table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>AUTHOR</th>
                            <th>PUBLISHER</th>
                            <th>YEAR PUBLISHED</th>
                            <th>CATEGORY</th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody id="book_data">
                    </tbody>
                </table>
                <p class="loading">Loading Data</p>
            </div>
        </div>
    </div>
	
	
    <!-- Edit Modal HTML -->
    <div id="addBookModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Book</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body add_book">
                    <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" id="title_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" id="isbn_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>AUTHOR</label>
                        <input type="text" class="form-control" id="author_input" required>
                    </div>
                    <div class="form-group">
                        <label>PUBLISHER</label>
                        <input type="text" id="publisher_input" class="form-control" required>
                    </div>
					   <div class="form-group">
                        <label>YEAR PUBLISHED</label>
                        <input type="number" min="4" id="year_input" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label>CATEGORY</label>
                        <input type="text" id="category_input" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add" onclick="addBook()">
                </div>
            </div>
        </div>
    </div>
	
	
	
    <!-- Edit Modal HTML -->
    <div id="editBookModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Book</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edit_book">
                     <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" id="title_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" id="isbn_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>AUTHOR</label>
                        <input type="text" class="form-control" id="author_input" required>
                    </div>
                    <div class="form-group">
                        <label>PUBLISHER</label>
                        <input type="text" id="publisher_input" class="form-control" required>
                    </div>
					   <div class="form-group">
                        <label>YEAR PUBLISHED</label>
                        <input type="number" min="4" id="year_input" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label>CATEGORY</label>
                        <input type="text" id="category_input" class="form-control" required>
						 <input type="hidden" id="book_id" class="form-control" required>
                    </div>
                  
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" onclick="editBook()" value="Save">
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Modal HTML -->
    <div id="deleteBookModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Book</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <input type="hidden" id="delete_id">
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" onclick="deleteBook()" value="Delete">
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
<script src="..\book\js\modal.js"></script>
</body>

</html>