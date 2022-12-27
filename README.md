# php-teleport
Graph library


Create graph:
$namedNodeFactory = new NamedNodeFactory();
$nodeA = $namedNodeFactory->node('A');
$nodeB = $namedNodeFactory->node('B');
$nodeC = $namedNodeFactory->node('C');

$edgeFactory = new BiDirectionalEdgeFactory();
$weight = 1;
$edgeFactory->connectNodes($nodeA, $nodeB, $weight);
$edgeFactory->connectNodes($nodeA, $nodeC, $weight);
$edgeFactory->connectNodes($nodeB, $nodeC, $weight);



Create cartesian graph:
Cartesian graph adds edge automatically between adjacent nodes. Edge is always bidirectional with weight 1.
$graphFactory = new CartesianGraphFactory();
$graphFactory->addNode(0, 0)->setPayload('S');
$graphFactory->addNode(0, 1)->setPayload('a');




A - B - A
      - C - B
          - D - C
              - E
  - E - A
      - D