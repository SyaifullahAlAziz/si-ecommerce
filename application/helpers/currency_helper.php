<?php

function idr($number)
{
	return 'Rp ' . number_format($number, 0, ',', '.');
}
