<?php

/**
 * This is an autogenerated file. Changes will be lost on next generation.
 */

declare(strict_types=1);

use RND\GremlinDSL\Traversal\GraphTraversal;
use RND\GremlinDSL\Traversal\GraphTraversalInterface;


if (!function_exists('V')) {
    /**
     * The "V" step.
     *
     * @param mixed[] $vertexIdsOrElements,...
     * @return GraphTraversal
     */
    function V(...$vertexIdsOrElements): GraphTraversal
    {
        return (new GraphTraversal())->V(...$vertexIdsOrElements);
    }
}

if (!function_exists('addE')) {
    /**
     * The "addE" step.
     *
     * @param mixed $args being any of:
     *                    - string edgeLabel
     *                    - GraphTraversalInterface edgeLabelTraversal
     * @return GraphTraversal
     */
    function addE(...$args): GraphTraversal
    {
        return (new GraphTraversal())->addE(...$args);
    }
}

if (!function_exists('addV')) {
    /**
     * The "addV" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string vertexLabel
     *                    - GraphTraversalInterface vertexLabelTraversal
     * @return GraphTraversal
     */
    function addV(...$args): GraphTraversal
    {
        return (new GraphTraversal())->addV(...$args);
    }
}

if (!function_exists('aggregate')) {
    /**
     * The "aggregate" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, string sideEffectKey
     *                    - string sideEffectKey
     * @return GraphTraversal
     */
    function aggregate(...$args): GraphTraversal
    {
        return (new GraphTraversal())->aggregate(...$args);
    }
}

if (!function_exists('_and')) {
    /**
     * The "and" step.
     *
     * @param GraphTraversalInterface[] $andTraversals,...
     * @return GraphTraversal
     */
    function _and(RND\GremlinDSL\Traversal\GraphTraversalInterface ...$andTraversals): GraphTraversal
    {
        return (new GraphTraversal())->and(...$andTraversals);
    }
}

if (!function_exists('_as')) {
    /**
     * The "as" step.
     *
     * @param string $stepLabel
     * @param string[] $stepLabels,...
     * @return GraphTraversal
     */
    function _as(string $stepLabel, string ...$stepLabels): GraphTraversal
    {
        return (new GraphTraversal())->as($stepLabel, ...$stepLabels);
    }
}

if (!function_exists('barrier')) {
    /**
     * The "barrier" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed barrierConsumer
     *                    - int maxBarrierSize
     * @return GraphTraversal
     */
    function barrier(...$args): GraphTraversal
    {
        return (new GraphTraversal())->barrier(...$args);
    }
}

if (!function_exists('both')) {
    /**
     * The "both" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function both(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->both(...$edgeLabels);
    }
}

if (!function_exists('bothE')) {
    /**
     * The "bothE" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function bothE(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->bothE(...$edgeLabels);
    }
}

if (!function_exists('bothV')) {
    /**
     * The "bothV" step.
     *
     * @return GraphTraversal
     */
    function bothV(): GraphTraversal
    {
        return (new GraphTraversal())->bothV();
    }
}

if (!function_exists('branch')) {
    /**
     * The "branch" step.
     *
     * @param mixed $args being any of:
     *                    - mixed function
     *                    - GraphTraversalInterface branchTraversal
     * @return GraphTraversal
     */
    function branch(...$args): GraphTraversal
    {
        return (new GraphTraversal())->branch(...$args);
    }
}

if (!function_exists('by')) {
    /**
     * The "by" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed comparator
     *                    - mixed function
     *                    - mixed function, mixed comparator
     *                    - mixed order
     *                    - string key
     *                    - string key, mixed comparator
     *                    - mixed token
     *                    - GraphTraversalInterface traversal
     *                    - GraphTraversalInterface traversal, mixed comparator
     * @return GraphTraversal
     */
    function by(...$args): GraphTraversal
    {
        return (new GraphTraversal())->by(...$args);
    }
}

if (!function_exists('call')) {
    /**
     * The "call" step.
     *
     * @param mixed $args being any of:
     *                    - string service
     *                    - string service, mixed params
     *                    - string service, mixed params, GraphTraversalInterface childTraversal
     *                    - string service, GraphTraversalInterface childTraversal
     * @return GraphTraversal
     */
    function call(...$args): GraphTraversal
    {
        return (new GraphTraversal())->call(...$args);
    }
}

if (!function_exists('cap')) {
    /**
     * The "cap" step.
     *
     * @param string $sideEffectKey
     * @param string[] $sideEffectKeys,...
     * @return GraphTraversal
     */
    function cap(string $sideEffectKey, string ...$sideEffectKeys): GraphTraversal
    {
        return (new GraphTraversal())->cap($sideEffectKey, ...$sideEffectKeys);
    }
}

if (!function_exists('choose')) {
    /**
     * The "choose" step.
     *
     * @param mixed $args being any of:
     *                    - mixed choiceFunction
     *                    - PredicateInterface choosePredicate, GraphTraversalInterface trueChoice
     *                    - PredicateInterface choosePredicate, GraphTraversalInterface trueChoice, GraphTraversalInterface falseChoice
     *                    - GraphTraversalInterface choiceTraversal
     *                    - GraphTraversalInterface traversalPredicate, GraphTraversalInterface trueChoice
     *                    - GraphTraversalInterface traversalPredicate, GraphTraversalInterface trueChoice, GraphTraversalInterface falseChoice
     * @return GraphTraversal
     */
    function choose(...$args): GraphTraversal
    {
        return (new GraphTraversal())->choose(...$args);
    }
}

if (!function_exists('coalesce')) {
    /**
     * The "coalesce" step.
     *
     * @param GraphTraversalInterface[] $coalesceTraversals,...
     * @return GraphTraversal
     */
    function coalesce(RND\GremlinDSL\Traversal\GraphTraversalInterface ...$coalesceTraversals): GraphTraversal
    {
        return (new GraphTraversal())->coalesce(...$coalesceTraversals);
    }
}

if (!function_exists('coin')) {
    /**
     * The "coin" step.
     *
     * @param float $probability
     * @return GraphTraversal
     */
    function coin(float $probability): GraphTraversal
    {
        return (new GraphTraversal())->coin($probability);
    }
}

if (!function_exists('connectedComponent')) {
    /**
     * The "connectedComponent" step.
     *
     * @return GraphTraversal
     */
    function connectedComponent(): GraphTraversal
    {
        return (new GraphTraversal())->connectedComponent();
    }
}

if (!function_exists('constant')) {
    /**
     * The "constant" step.
     *
     * @param mixed $e
     * @return GraphTraversal
     */
    function constant($e): GraphTraversal
    {
        return (new GraphTraversal())->constant($e);
    }
}

if (!function_exists('count')) {
    /**
     * The "count" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function count(...$args): GraphTraversal
    {
        return (new GraphTraversal())->count(...$args);
    }
}

if (!function_exists('cyclicPath')) {
    /**
     * The "cyclicPath" step.
     *
     * @return GraphTraversal
     */
    function cyclicPath(): GraphTraversal
    {
        return (new GraphTraversal())->cyclicPath();
    }
}

if (!function_exists('dedup')) {
    /**
     * The "dedup" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, string dedupLabels
     *                    - string dedupLabels
     * @return GraphTraversal
     */
    function dedup(...$args): GraphTraversal
    {
        return (new GraphTraversal())->dedup(...$args);
    }
}

if (!function_exists('drop')) {
    /**
     * The "drop" step.
     *
     * @return GraphTraversal
     */
    function drop(): GraphTraversal
    {
        return (new GraphTraversal())->drop();
    }
}

if (!function_exists('element')) {
    /**
     * The "element" step.
     *
     * @return GraphTraversal
     */
    function element(): GraphTraversal
    {
        return (new GraphTraversal())->element();
    }
}

if (!function_exists('elementMap')) {
    /**
     * The "elementMap" step.
     *
     * @param string[] $propertyKeys,...
     * @return GraphTraversal
     */
    function elementMap(string ...$propertyKeys): GraphTraversal
    {
        return (new GraphTraversal())->elementMap(...$propertyKeys);
    }
}

if (!function_exists('emit')) {
    /**
     * The "emit" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - PredicateInterface emitPredicate
     *                    - GraphTraversalInterface emitTraversal
     * @return GraphTraversal
     */
    function emit(...$args): GraphTraversal
    {
        return (new GraphTraversal())->emit(...$args);
    }
}

if (!function_exists('fail')) {
    /**
     * The "fail" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string message
     * @return GraphTraversal
     */
    function fail(...$args): GraphTraversal
    {
        return (new GraphTraversal())->fail(...$args);
    }
}

if (!function_exists('filter')) {
    /**
     * The "filter" step.
     *
     * @param mixed $args being any of:
     *                    - PredicateInterface predicate
     *                    - GraphTraversalInterface filterTraversal
     * @return GraphTraversal
     */
    function filter(...$args): GraphTraversal
    {
        return (new GraphTraversal())->filter(...$args);
    }
}

if (!function_exists('flatMap')) {
    /**
     * The "flatMap" step.
     *
     * @param mixed $args being any of:
     *                    - mixed function
     *                    - GraphTraversalInterface flatMapTraversal
     * @return GraphTraversal
     */
    function flatMap(...$args): GraphTraversal
    {
        return (new GraphTraversal())->flatMap(...$args);
    }
}

if (!function_exists('fold')) {
    /**
     * The "fold" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed seed, mixed foldFunction
     * @return GraphTraversal
     */
    function fold(...$args): GraphTraversal
    {
        return (new GraphTraversal())->fold(...$args);
    }
}

if (!function_exists('from')) {
    /**
     * The "from" step.
     *
     * @param mixed $args being any of:
     *                    - string fromStepLabel
     *                    - GraphTraversalInterface fromVertex
     *                    - mixed fromVertex
     * @return GraphTraversal
     */
    function from(...$args): GraphTraversal
    {
        return (new GraphTraversal())->from(...$args);
    }
}

if (!function_exists('group')) {
    /**
     * The "group" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string sideEffectKey
     * @return GraphTraversal
     */
    function group(...$args): GraphTraversal
    {
        return (new GraphTraversal())->group(...$args);
    }
}

if (!function_exists('groupCount')) {
    /**
     * The "groupCount" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string sideEffectKey
     * @return GraphTraversal
     */
    function groupCount(...$args): GraphTraversal
    {
        return (new GraphTraversal())->groupCount(...$args);
    }
}

if (!function_exists('has')) {
    /**
     * The "has" step.
     *
     * @param mixed $args being any of:
     *                    - string propertyKey
     *                    - string propertyKey, mixed value
     *                    - string propertyKey, mixed predicate
     *                    - string label, string propertyKey, mixed value
     *                    - string label, string propertyKey, mixed predicate
     *                    - string propertyKey, GraphTraversalInterface propertyTraversal
     *                    - mixed accessor, mixed value
     *                    - mixed accessor, mixed predicate
     *                    - mixed accessor, GraphTraversalInterface propertyTraversal
     * @return GraphTraversal
     */
    function has(...$args): GraphTraversal
    {
        return (new GraphTraversal())->has(...$args);
    }
}

if (!function_exists('hasId')) {
    /**
     * The "hasId" step.
     *
     * @param mixed $args being any of:
     *                    - mixed id, mixed otherIds
     *                    - mixed predicate
     * @return GraphTraversal
     */
    function hasId(...$args): GraphTraversal
    {
        return (new GraphTraversal())->hasId(...$args);
    }
}

if (!function_exists('hasKey')) {
    /**
     * The "hasKey" step.
     *
     * @param mixed $args being any of:
     *                    - mixed predicate
     *                    - string label, string otherLabels
     * @return GraphTraversal
     */
    function hasKey(...$args): GraphTraversal
    {
        return (new GraphTraversal())->hasKey(...$args);
    }
}

if (!function_exists('hasLabel')) {
    /**
     * The "hasLabel" step.
     *
     * @param mixed $args being any of:
     *                    - mixed predicate
     *                    - string label, string otherLabels
     * @return GraphTraversal
     */
    function hasLabel(...$args): GraphTraversal
    {
        return (new GraphTraversal())->hasLabel(...$args);
    }
}

if (!function_exists('hasNot')) {
    /**
     * The "hasNot" step.
     *
     * @param string $propertyKey
     * @return GraphTraversal
     */
    function hasNot(string $propertyKey): GraphTraversal
    {
        return (new GraphTraversal())->hasNot($propertyKey);
    }
}

if (!function_exists('hasValue')) {
    /**
     * The "hasValue" step.
     *
     * @param mixed $args being any of:
     *                    - mixed value, mixed otherValues
     *                    - mixed predicate
     * @return GraphTraversal
     */
    function hasValue(...$args): GraphTraversal
    {
        return (new GraphTraversal())->hasValue(...$args);
    }
}

if (!function_exists('id')) {
    /**
     * The "id" step.
     *
     * @return GraphTraversal
     */
    function id(): GraphTraversal
    {
        return (new GraphTraversal())->id();
    }
}

if (!function_exists('identity')) {
    /**
     * The "identity" step.
     *
     * @return GraphTraversal
     */
    function identity(): GraphTraversal
    {
        return (new GraphTraversal())->identity();
    }
}

if (!function_exists('in')) {
    /**
     * The "in" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function in(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->in(...$edgeLabels);
    }
}

if (!function_exists('inE')) {
    /**
     * The "inE" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function inE(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->inE(...$edgeLabels);
    }
}

if (!function_exists('inV')) {
    /**
     * The "inV" step.
     *
     * @return GraphTraversal
     */
    function inV(): GraphTraversal
    {
        return (new GraphTraversal())->inV();
    }
}

if (!function_exists('index')) {
    /**
     * The "index" step.
     *
     * @return GraphTraversal
     */
    function index(): GraphTraversal
    {
        return (new GraphTraversal())->index();
    }
}

if (!function_exists('inject')) {
    /**
     * The "inject" step.
     *
     * @param mixed[] $injections,...
     * @return GraphTraversal
     */
    function inject(...$injections): GraphTraversal
    {
        return (new GraphTraversal())->inject(...$injections);
    }
}

if (!function_exists('is')) {
    /**
     * The "is" step.
     *
     * @param mixed $args being any of:
     *                    - mixed value
     *                    - mixed predicate
     * @return GraphTraversal
     */
    function is(...$args): GraphTraversal
    {
        return (new GraphTraversal())->is(...$args);
    }
}

if (!function_exists('key')) {
    /**
     * The "key" step.
     *
     * @return GraphTraversal
     */
    function key(): GraphTraversal
    {
        return (new GraphTraversal())->key();
    }
}

if (!function_exists('label')) {
    /**
     * The "label" step.
     *
     * @return GraphTraversal
     */
    function label(): GraphTraversal
    {
        return (new GraphTraversal())->label();
    }
}

if (!function_exists('limit')) {
    /**
     * The "limit" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, int limit
     *                    - int limit
     * @return GraphTraversal
     */
    function limit(...$args): GraphTraversal
    {
        return (new GraphTraversal())->limit(...$args);
    }
}

if (!function_exists('local')) {
    /**
     * The "local" step.
     *
     * @param GraphTraversalInterface $localTraversal
     * @return GraphTraversal
     */
    function local(RND\GremlinDSL\Traversal\GraphTraversalInterface $localTraversal): GraphTraversal
    {
        return (new GraphTraversal())->local($localTraversal);
    }
}

if (!function_exists('loops')) {
    /**
     * The "loops" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string loopName
     * @return GraphTraversal
     */
    function loops(...$args): GraphTraversal
    {
        return (new GraphTraversal())->loops(...$args);
    }
}

if (!function_exists('map')) {
    /**
     * The "map" step.
     *
     * @param mixed $args being any of:
     *                    - mixed function
     *                    - GraphTraversalInterface mapTraversal
     * @return GraphTraversal
     */
    function map(...$args): GraphTraversal
    {
        return (new GraphTraversal())->map(...$args);
    }
}

if (!function_exists('_match')) {
    /**
     * The "match" step.
     *
     * @param GraphTraversalInterface[] $matchTraversals,...
     * @return GraphTraversal
     */
    function _match(RND\GremlinDSL\Traversal\GraphTraversalInterface ...$matchTraversals): GraphTraversal
    {
        return (new GraphTraversal())->match(...$matchTraversals);
    }
}

if (!function_exists('math')) {
    /**
     * The "math" step.
     *
     * @param string $expression
     * @return GraphTraversal
     */
    function math(string $expression): GraphTraversal
    {
        return (new GraphTraversal())->math($expression);
    }
}

if (!function_exists('max')) {
    /**
     * The "max" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function max(...$args): GraphTraversal
    {
        return (new GraphTraversal())->max(...$args);
    }
}

if (!function_exists('mean')) {
    /**
     * The "mean" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function mean(...$args): GraphTraversal
    {
        return (new GraphTraversal())->mean(...$args);
    }
}

if (!function_exists('mergeE')) {
    /**
     * The "mergeE" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed searchCreate
     *                    - GraphTraversalInterface searchCreate
     * @return GraphTraversal
     */
    function mergeE(...$args): GraphTraversal
    {
        return (new GraphTraversal())->mergeE(...$args);
    }
}

if (!function_exists('mergeV')) {
    /**
     * The "mergeV" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed searchCreate
     *                    - GraphTraversalInterface searchCreate
     * @return GraphTraversal
     */
    function mergeV(...$args): GraphTraversal
    {
        return (new GraphTraversal())->mergeV(...$args);
    }
}

if (!function_exists('min')) {
    /**
     * The "min" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function min(...$args): GraphTraversal
    {
        return (new GraphTraversal())->min(...$args);
    }
}

if (!function_exists('none')) {
    /**
     * The "none" step.
     *
     * @return GraphTraversal
     */
    function none(): GraphTraversal
    {
        return (new GraphTraversal())->none();
    }
}

if (!function_exists('not')) {
    /**
     * The "not" step.
     *
     * @param GraphTraversalInterface $notTraversal
     * @return GraphTraversal
     */
    function not(RND\GremlinDSL\Traversal\GraphTraversalInterface $notTraversal): GraphTraversal
    {
        return (new GraphTraversal())->not($notTraversal);
    }
}

if (!function_exists('option')) {
    /**
     * The "option" step.
     *
     * @param mixed $args being any of:
     *                    - mixed token, mixed m
     *                    - mixed token, GraphTraversalInterface traversalOption
     *                    - GraphTraversalInterface traversalOption
     * @return GraphTraversal
     */
    function option(...$args): GraphTraversal
    {
        return (new GraphTraversal())->option(...$args);
    }
}

if (!function_exists('optional')) {
    /**
     * The "optional" step.
     *
     * @param GraphTraversalInterface $optionalTraversal
     * @return GraphTraversal
     */
    function optional(RND\GremlinDSL\Traversal\GraphTraversalInterface $optionalTraversal): GraphTraversal
    {
        return (new GraphTraversal())->optional($optionalTraversal);
    }
}

if (!function_exists('_or')) {
    /**
     * The "or" step.
     *
     * @param GraphTraversalInterface[] $orTraversals,...
     * @return GraphTraversal
     */
    function _or(RND\GremlinDSL\Traversal\GraphTraversalInterface ...$orTraversals): GraphTraversal
    {
        return (new GraphTraversal())->or(...$orTraversals);
    }
}

if (!function_exists('order')) {
    /**
     * The "order" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function order(...$args): GraphTraversal
    {
        return (new GraphTraversal())->order(...$args);
    }
}

if (!function_exists('otherV')) {
    /**
     * The "otherV" step.
     *
     * @return GraphTraversal
     */
    function otherV(): GraphTraversal
    {
        return (new GraphTraversal())->otherV();
    }
}

if (!function_exists('out')) {
    /**
     * The "out" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function out(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->out(...$edgeLabels);
    }
}

if (!function_exists('outE')) {
    /**
     * The "outE" step.
     *
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function outE(string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->outE(...$edgeLabels);
    }
}

if (!function_exists('outV')) {
    /**
     * The "outV" step.
     *
     * @return GraphTraversal
     */
    function outV(): GraphTraversal
    {
        return (new GraphTraversal())->outV();
    }
}

if (!function_exists('pageRank')) {
    /**
     * The "pageRank" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - float alpha
     * @return GraphTraversal
     */
    function pageRank(...$args): GraphTraversal
    {
        return (new GraphTraversal())->pageRank(...$args);
    }
}

if (!function_exists('path')) {
    /**
     * The "path" step.
     *
     * @return GraphTraversal
     */
    function path(): GraphTraversal
    {
        return (new GraphTraversal())->path();
    }
}

if (!function_exists('peerPressure')) {
    /**
     * The "peerPressure" step.
     *
     * @return GraphTraversal
     */
    function peerPressure(): GraphTraversal
    {
        return (new GraphTraversal())->peerPressure();
    }
}

if (!function_exists('profile')) {
    /**
     * The "profile" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string sideEffectKey
     * @return GraphTraversal
     */
    function profile(...$args): GraphTraversal
    {
        return (new GraphTraversal())->profile(...$args);
    }
}

if (!function_exists('program')) {
    /**
     * The "program" step.
     *
     * @param mixed $vertexProgram
     * @return GraphTraversal
     */
    function program($vertexProgram): GraphTraversal
    {
        return (new GraphTraversal())->program($vertexProgram);
    }
}

if (!function_exists('project')) {
    /**
     * The "project" step.
     *
     * @param string $projectKey
     * @param string[] $otherProjectKeys,...
     * @return GraphTraversal
     */
    function project(string $projectKey, string ...$otherProjectKeys): GraphTraversal
    {
        return (new GraphTraversal())->project($projectKey, ...$otherProjectKeys);
    }
}

if (!function_exists('properties')) {
    /**
     * The "properties" step.
     *
     * @param string[] $propertyKeys,...
     * @return GraphTraversal
     */
    function properties(string ...$propertyKeys): GraphTraversal
    {
        return (new GraphTraversal())->properties(...$propertyKeys);
    }
}

if (!function_exists('property')) {
    /**
     * The "property" step.
     *
     * @param mixed $args being any of:
     *                    - mixed cardinality, mixed key, mixed value, mixed keyValues
     *                    - mixed value
     *                    - mixed key, mixed value, mixed keyValues
     * @return GraphTraversal
     */
    function property(...$args): GraphTraversal
    {
        return (new GraphTraversal())->property(...$args);
    }
}

if (!function_exists('propertyMap')) {
    /**
     * The "propertyMap" step.
     *
     * @param string[] $propertyKeys,...
     * @return GraphTraversal
     */
    function propertyMap(string ...$propertyKeys): GraphTraversal
    {
        return (new GraphTraversal())->propertyMap(...$propertyKeys);
    }
}

if (!function_exists('range')) {
    /**
     * The "range" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, int low, int high
     *                    - int low, int high
     * @return GraphTraversal
     */
    function range(...$args): GraphTraversal
    {
        return (new GraphTraversal())->range(...$args);
    }
}

if (!function_exists('read')) {
    /**
     * The "read" step.
     *
     * @return GraphTraversal
     */
    function read(): GraphTraversal
    {
        return (new GraphTraversal())->read();
    }
}

if (!function_exists('repeat')) {
    /**
     * The "repeat" step.
     *
     * @param mixed $args being any of:
     *                    - string loopName, GraphTraversalInterface repeatTraversal
     *                    - GraphTraversalInterface repeatTraversal
     * @return GraphTraversal
     */
    function repeat(...$args): GraphTraversal
    {
        return (new GraphTraversal())->repeat(...$args);
    }
}

if (!function_exists('sack')) {
    /**
     * The "sack" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed sackOperator
     * @return GraphTraversal
     */
    function sack(...$args): GraphTraversal
    {
        return (new GraphTraversal())->sack(...$args);
    }
}

if (!function_exists('sample')) {
    /**
     * The "sample" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, int amountToSample
     *                    - int amountToSample
     * @return GraphTraversal
     */
    function sample(...$args): GraphTraversal
    {
        return (new GraphTraversal())->sample(...$args);
    }
}

if (!function_exists('select')) {
    /**
     * The "select" step.
     *
     * @param mixed $args being any of:
     *                    - mixed column
     *                    - mixed pop, string selectKey
     *                    - mixed pop, string selectKey1, string selectKey2, string otherSelectKeys
     *                    - mixed pop, GraphTraversalInterface keyTraversal
     *                    - string selectKey
     *                    - string selectKey1, string selectKey2, string otherSelectKeys
     *                    - GraphTraversalInterface keyTraversal
     * @return GraphTraversal
     */
    function select(...$args): GraphTraversal
    {
        return (new GraphTraversal())->select(...$args);
    }
}

if (!function_exists('shortestPath')) {
    /**
     * The "shortestPath" step.
     *
     * @return GraphTraversal
     */
    function shortestPath(): GraphTraversal
    {
        return (new GraphTraversal())->shortestPath();
    }
}

if (!function_exists('sideEffect')) {
    /**
     * The "sideEffect" step.
     *
     * @param mixed $args being any of:
     *                    - mixed consumer
     *                    - GraphTraversalInterface sideEffectTraversal
     * @return GraphTraversal
     */
    function sideEffect(...$args): GraphTraversal
    {
        return (new GraphTraversal())->sideEffect(...$args);
    }
}

if (!function_exists('simplePath')) {
    /**
     * The "simplePath" step.
     *
     * @return GraphTraversal
     */
    function simplePath(): GraphTraversal
    {
        return (new GraphTraversal())->simplePath();
    }
}

if (!function_exists('skip')) {
    /**
     * The "skip" step.
     *
     * @param mixed $args being any of:
     *                    - mixed scope, int skip
     *                    - int skip
     * @return GraphTraversal
     */
    function skip(...$args): GraphTraversal
    {
        return (new GraphTraversal())->skip(...$args);
    }
}

if (!function_exists('store')) {
    /**
     * The "store" step.
     *
     * @param string $sideEffectKey
     * @return GraphTraversal
     */
    function store(string $sideEffectKey): GraphTraversal
    {
        return (new GraphTraversal())->store($sideEffectKey);
    }
}

if (!function_exists('subgraph')) {
    /**
     * The "subgraph" step.
     *
     * @param string $sideEffectKey
     * @return GraphTraversal
     */
    function subgraph(string $sideEffectKey): GraphTraversal
    {
        return (new GraphTraversal())->subgraph($sideEffectKey);
    }
}

if (!function_exists('sum')) {
    /**
     * The "sum" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     * @return GraphTraversal
     */
    function sum(...$args): GraphTraversal
    {
        return (new GraphTraversal())->sum(...$args);
    }
}

if (!function_exists('tail')) {
    /**
     * The "tail" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - mixed scope
     *                    - mixed scope, int limit
     *                    - int limit
     * @return GraphTraversal
     */
    function tail(...$args): GraphTraversal
    {
        return (new GraphTraversal())->tail(...$args);
    }
}

if (!function_exists('timeLimit')) {
    /**
     * The "timeLimit" step.
     *
     * @param int $timeLimit
     * @return GraphTraversal
     */
    function timeLimit(int $timeLimit): GraphTraversal
    {
        return (new GraphTraversal())->timeLimit($timeLimit);
    }
}

if (!function_exists('times')) {
    /**
     * The "times" step.
     *
     * @param int $maxLoops
     * @return GraphTraversal
     */
    function times(int $maxLoops): GraphTraversal
    {
        return (new GraphTraversal())->times($maxLoops);
    }
}

if (!function_exists('to')) {
    /**
     * The "to" step.
     *
     * @param mixed $args being any of:
     *                    - mixed direction, string edgeLabels
     *                    - string toStepLabel
     *                    - GraphTraversalInterface toVertex
     *                    - mixed toVertex
     * @return GraphTraversal
     */
    function to(...$args): GraphTraversal
    {
        return (new GraphTraversal())->to(...$args);
    }
}

if (!function_exists('toE')) {
    /**
     * The "toE" step.
     *
     * @param mixed $direction
     * @param string[] $edgeLabels,...
     * @return GraphTraversal
     */
    function toE($direction, string ...$edgeLabels): GraphTraversal
    {
        return (new GraphTraversal())->toE($direction, ...$edgeLabels);
    }
}

if (!function_exists('toV')) {
    /**
     * The "toV" step.
     *
     * @param mixed $direction
     * @return GraphTraversal
     */
    function toV($direction): GraphTraversal
    {
        return (new GraphTraversal())->toV($direction);
    }
}

if (!function_exists('tree')) {
    /**
     * The "tree" step.
     *
     * @param mixed $args being any of:
     *                    - empty
     *                    - string sideEffectKey
     * @return GraphTraversal
     */
    function tree(...$args): GraphTraversal
    {
        return (new GraphTraversal())->tree(...$args);
    }
}

if (!function_exists('unfold')) {
    /**
     * The "unfold" step.
     *
     * @return GraphTraversal
     */
    function unfold(): GraphTraversal
    {
        return (new GraphTraversal())->unfold();
    }
}

if (!function_exists('union')) {
    /**
     * The "union" step.
     *
     * @param GraphTraversalInterface[] $unionTraversals,...
     * @return GraphTraversal
     */
    function union(RND\GremlinDSL\Traversal\GraphTraversalInterface ...$unionTraversals): GraphTraversal
    {
        return (new GraphTraversal())->union(...$unionTraversals);
    }
}

if (!function_exists('until')) {
    /**
     * The "until" step.
     *
     * @param mixed $args being any of:
     *                    - PredicateInterface untilPredicate
     *                    - GraphTraversalInterface untilTraversal
     * @return GraphTraversal
     */
    function until(...$args): GraphTraversal
    {
        return (new GraphTraversal())->until(...$args);
    }
}

if (!function_exists('value')) {
    /**
     * The "value" step.
     *
     * @return GraphTraversal
     */
    function value(): GraphTraversal
    {
        return (new GraphTraversal())->value();
    }
}

if (!function_exists('valueMap')) {
    /**
     * The "valueMap" step.
     *
     * @param mixed $args being any of:
     *                    - string propertyKeys
     *                    - mixed includeTokens, string propertyKeys
     * @return GraphTraversal
     */
    function valueMap(...$args): GraphTraversal
    {
        return (new GraphTraversal())->valueMap(...$args);
    }
}

if (!function_exists('values')) {
    /**
     * The "values" step.
     *
     * @param string[] $propertyKeys,...
     * @return GraphTraversal
     */
    function values(string ...$propertyKeys): GraphTraversal
    {
        return (new GraphTraversal())->values(...$propertyKeys);
    }
}

if (!function_exists('where')) {
    /**
     * The "where" step.
     *
     * @param mixed $args being any of:
     *                    - mixed predicate
     *                    - string startKey, mixed predicate
     *                    - GraphTraversalInterface whereTraversal
     * @return GraphTraversal
     */
    function where(...$args): GraphTraversal
    {
        return (new GraphTraversal())->where(...$args);
    }
}

if (!function_exists('with')) {
    /**
     * The "with" step.
     *
     * @param mixed $args being any of:
     *                    - string key
     *                    - string key, mixed value
     * @return GraphTraversal
     */
    function with(...$args): GraphTraversal
    {
        return (new GraphTraversal())->with(...$args);
    }
}

if (!function_exists('write')) {
    /**
     * The "write" step.
     *
     * @return GraphTraversal
     */
    function write(): GraphTraversal
    {
        return (new GraphTraversal())->write();
    }
}
