<?php

declare(strict_types=1);

namespace PHPUnitForGatoGraphQL\GatoGraphQL\Unit\Faker;

use GraphQLByPoP\GraphQLServer\Unit\DisabledFixtureQueryExecutionGraphQLServerTestCaseTrait;

class DisabledSingleTypeInsteadOfBlockUnionTypeFixtureQueryExecutionGraphQLServerTest extends AbstractEnableDisableSingleTypeInsteadOfBlockUnionTypeFixtureQueryExecutionGraphQLServerTestCase
{
    use DisabledFixtureQueryExecutionGraphQLServerTestCaseTrait;
}
