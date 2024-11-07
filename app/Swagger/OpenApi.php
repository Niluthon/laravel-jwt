<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\Info(version: "1.0", description: "Open API documentation", title: "Laravel JWT API Documentation")]

#[OA\Components(
    securitySchemes: [
        new OA\SecurityScheme(
            securityScheme: 'BearerAuth',
            type: 'http',
            in: 'header',
            bearerFormat: 'JWT',
            scheme: 'bearer'
        )
    ]
)]
interface OpenApi {}
