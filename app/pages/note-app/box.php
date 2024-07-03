<div class="modal fade" id="deleteBox" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <?php
                        echo $student_id;
                        $query = "SELECT * FROM Student_Information where id = " . $student_id;

                        $data = $app->selectOne($query);

                        print_r($data);
                        ?>
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to delete
                    <span class="text-info">
                        <?php
                        // print_r($data['Roll_Number']);
                        ?>
                    </span>
                    ?
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="delete-form" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>