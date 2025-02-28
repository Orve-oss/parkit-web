<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Chemins où CORS est appliqué
    'allowed_methods' => ['*'], // Autorise toutes les méthodes (GET, POST, etc.)
    'allowed_origins' => ['*'], // Autorise toutes les origines (mettre un domaine spécifique si besoin)
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Autorise tous les headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
