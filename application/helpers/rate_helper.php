<?php
/**
 * Return start icon based on rating
 */
function star($star = 0)
{
	if ($star >= 0 && $star <= 5) {
		$html = "";
		for ($i = 1; $i <= $star; $i++) $html .= '<i class="bx bxs-star"></i>';
		for ($i = 5; $i > $star; $i--) $html .= '<i class="bx bx-star"></i>';
		return $html;
	} else {
		return 'Err! Rating range is 0-5';
	}
}
