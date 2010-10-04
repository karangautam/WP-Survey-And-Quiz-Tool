<div class="wrap">

	<div id="icon-tools" class="icon32"></div>
	<h2>
		WP Survey And Quiz Tool - Quizes
	</h2>
	
	<div class="tablenav">
		<div class="alignleft">
			<a href="<?php echo $_SERVER['REQUEST_URI']; ?>&action=create" class="button-secondary" title="Add New Quiz">Add New Quiz</a>
		</div>
	
		<div class="tablenav-pages">
		   <?php echo wpsqt_functions_pagenation_display($currentPage, $numberOfPages); ?>
		</div>
	</div>
	
	<table class="widefat">
		<thead>
			<tr>
				<th>ID</th>
				<th>Quiz Name</th>
				<th>Status</th>
				<th>Type</th>
				<th>Edit Questions</th>
				<th>Edit Sections</th>
				<th>Configure</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Quiz Name</th>
				<th>Status</th>
				<th>Type</th>
				<th>Edit Questions</th>
				<th>Edit Sections</th>
				<th>Configure</th>
				<th>Delete</th>
			</tr>
		</tfoot>
		<tbody>
			
			<?php
			if ( empty($quizList) ){
				?>
				<tr>
					<td colspan="7"><div style="text-align: center;">No quizes or surveys yet!</div></td>
				</tr>
				<?php 
			}
			else {
				foreach ( $quizList as $quiz ) { ?>
			<tr>
				<td><?php echo $quiz['id']; ?></td>
				<td><?php echo stripslashes($quiz['name']); ?></td>
				<td><?php echo ucfirst( stripslashes($quiz['status']) ); ?></td>
				<td><?php echo ucfirst( stripslashes($quiz['type']) ); ?></td>
				<td><a href="admin.php?page=<?php echo WPSQT_PAGE_QUESTIONS; ?>&action=list&quizid=<?php echo $quiz['id']; ?>" class="button-secondary" title="Edit Questions">Edit Questions</a></td>
				<td><a href="<?php echo $_SERVER['REQUEST_URI']; ?>&action=sections&quizid=<?php echo $quiz['id']; ?>" class="button-secondary" title="Edit Questions">Edit Sections</a></td>
				<td><a href="<?php echo $_SERVER['REQUEST_URI']; ?>&action=configure&quizid=<?php echo $quiz['id']; ?>" class="button-secondary" title="Configure Quiz">Configure Quiz</a></td>
				<td><a href="<?php echo $_SERVER['REQUEST_URI']; ?>&action=delete&quizid=<?php echo $quiz['id']; ?>" class="button-secondary" title="Delete Quiz">Delete</a></td>
			</tr>
			<?php } 
				}?>
		</tbody>
	</table>
	
	<div class="tablenav">
		<div class="alignleft">
			<a href="<?php echo $_SERVER['REQUEST_URI']; ?>&action=create" class="button-secondary" title="Add New Quiz">Add New Quiz</a>
		</div>
	
		<div class="tablenav-pages">
		   <?php echo wpsqt_functions_pagenation_display($currentPage, $numberOfPages); ?>
		</div>
	</div>
</div>