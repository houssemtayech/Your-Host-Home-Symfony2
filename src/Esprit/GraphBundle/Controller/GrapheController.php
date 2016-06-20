<?php

namespace Esprit\GraphBundle\Controller;
use Esprit\DarkomBundle\Entity\UserRepository;
use Esprit\DarkomBundle\Entity\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;

class GrapheController extends Controller {

    public function chartLineAction() {

        // Chart

        $series = array(
            array("name" => "Nom du graphe", "data" => array(1, 2, 4, 5, 6, 3, 8))
        );

        $ob = new Highchart();

        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe

        $ob->title->text('Titre du graphique');
        $ob->xAxis->title(array('text' => "Titre axe horizontal"));

        $ob->yAxis->title(array('text' => "Titre axe vertical "));

        $ob->series($series);

        return $this->render('EspritGraphBundle:Graphe:LineChart.html.twig', array(
                    'chart' => $ob
        ));
    }

    public function chartHistogrammeAction() {
        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository("EspritDarkomBundle:Offre")
                ->findByPublication('0');
        $nbr = count($offres);
        $offres1 = $em->getRepository("EspritDarkomBundle:Offre")
                ->findByPublication('1');
        $nbr1 = count($offres1);
        $offres2 = $em->getRepository("EspritDarkomBundle:Offre")
                ->findByPublication('2');
        $nbr2 = count($offres2);
        $offres3 = $em->getRepository("EspritDarkomBundle:Offre")
                ->findByPublication('3');
        $nbr3 = count($offres2);
        $series = array(
            array(
                'name' => 'Nombre des Offres',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array($nbr, $nbr1, $nbr2, $nbr3),
            ),
            
        );

        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " Offres" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Nombre des offres',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('En attente', 'Approuvés', 'Désapprouvés', 'Commandés');

        $ob = new Highchart();

        $ob->chart->renderTo('container'); // The #id of the div where to render the chart

        $ob->chart->type('column');

        $ob->title->text('Statistique des offres');

        $ob->xAxis->categories($categories);

        $ob->yAxis($yData);

        $ob->legend->enabled(false);

        $formatter = new Expr('function () {

 var unit = {

 "Nombre des Offres": "Offres",

 

 }[this.series.name];

 return this.x + ": <b>" + this.y + "</b> " + unit;

 }');

        $ob->tooltip->formatter($formatter);

        $ob->series($series);

        return $this->render('EspritGraphBundle:Graphe:histogramme.html.twig', array(
                    'chart' => $ob
        ));
    }
public function chartLine1Action() {

        // Chart

        $series = array(
            array("name" => "Nom du graphe", "data" => array(1, 2, 4, 5, 6, 3, 8))
        );

        $ob = new Highchart();

        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe

        $ob->title->text('Titre du graphique');
        $ob->xAxis->title(array('text' => "Titre axe horizontal"));

        $ob->yAxis->title(array('text' => "Titre axe vertical "));

        $ob->series($series);

        return $this->render('EspritGraphBundle:Graphe:LineChart.html.twig', array(
                    'chart' => $ob
        ));
    }

    public function chartHistogramme1Action() {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("EspritDarkomBundle:User")
                ->findByStatus('1');
        $nbr = count($user);
        $user1 = $em->getRepository("EspritDarkomBundle:User")
                ->findByStatus('2');
        $nbr1 = count($user1);
        
        $series = array(
            array(
                'name' => 'Nombre des membres',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array($nbr, $nbr1),
            ),
            
        );

        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " Membres" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Nombre des membres',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Annonceurs', 'Clients');

        $ob = new Highchart();

        $ob->chart->renderTo('container'); // The #id of the div where to render the chart

        $ob->chart->type('column');

        $ob->title->text('Statistique des membres');

        $ob->xAxis->categories($categories);

        $ob->yAxis($yData);

        $ob->legend->enabled(false);

        $formatter = new Expr('function () {

 var unit = {

 "Nombre des membres": "membres",

 

 }[this.series.name];

 return this.x + ": <b>" + this.y + "</b> " + unit;

 }');

        $ob->tooltip->formatter($formatter);

        $ob->series($series);

        return $this->render('EspritGraphBundle:Graphe:histogramme.html.twig', array(
                    'chart' => $ob
        ));
    }

}
