<?php
// Create id attribute allowing for custom "anchor" value.
		$id = 'call-action' . $block['id'];
		if( !empty($block['anchor']) ) {
		    $id = $block['anchor'];
		}

		// Create class attribute allowing for custom "className" and "align" values.
		$className = 'call-action';
		if( !empty($block['className']) ) {
		    $className .= ' ' . $block['className'];
		}
		if( !empty($block['align']) ) {
		    $className .= ' align' . $block['align'];
		}
		if( $is_preview ) {
		    $className .= ' is-admin';
		}

		$image = get_field('image');
		$background = get_field('background');
		$title = get_field('title');
		$description = get_field('description');
		$button_text = get_field('button_text');
		$button_link = get_field('button_link') ? get_field('button_link') : '#';

		?>
		<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image: url(<?php echo $image; ?>);">
			<div class="bg-image" style="background-color: <?php echo $background; ?>"></div>
			<div class="call-action-content">
				<?php if (!empty($title)): ?>
					<h3 class="title"><?php echo $title; ?></h3>
				<?php endif ?>
				<?php if (!empty($description)): ?>
					<div class="description"><?php echo $description; ?></div>
				<?php endif ?>
				<?php if (!empty($button_text)): ?>
					<a href="<?php echo esc_url($button_link); ?>"> <?php echo $button_text; ?></a>
				<?php endif ?>
			</div>
		</div>
<?php     