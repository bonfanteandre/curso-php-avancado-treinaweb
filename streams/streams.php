<?php

// Camadas de transporte
print_r(stream_get_transports());

echo '<br>';

// Wrappers (protocolos)
print_r(stream_get_wrappers());

echo '<br>';

// Filtros
print_r(stream_get_filters());