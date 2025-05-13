<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'attendance', language 'en'
 *
 * @package   mod_attendance
 * @copyright  2011 Artem Andreev <andreev.artem@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['Aacronym'] = 'A';
$string['Afull'] = 'Absent';
$string['Eacronym'] = 'E';
$string['Efull'] = 'Excusé';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'Retard';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Présent';
$string['absenteereport'] = 'Rapport des absences';
$string['acronym'] = 'Acronyme';
$string['add'] = 'Ajouter';
$string['addedrecip'] = '{$a} nouveau destinataire ajouté';
$string['addedrecips'] = '{$a} nouveaux destinataires ajoutés';
$string['addmultiplesessions'] = 'Sessions multiples';
$string['addsession'] = 'Ajouter une session';
$string['adduser'] = 'Ajouter un utilisateur';
$string['addwarning'] = 'Ajouter un avertissement';
$string['all'] = 'Tout';
$string['allcourses'] = 'Tous les cours';
$string['allowupdatestatus'] = 'Autoriser les étudiants à mettre à jour leur propre présence';
$string['allowupdatestatus_desc'] = 'Si coché, les étudiants pourront mettre à jour leur présence pour une session après l\'avoir déjà auto-déclarée.';
$string['allowupdatestatus_help'] = 'Si coché, les étudiants pourront mettre à jour leur présence pour une session après l\'avoir déjà auto-déclarée.';
$string['allpast'] = 'Tout le passé';
$string['allsessions'] = 'Toutes les sessions';
$string['allsessionstotals'] = 'Totaux pour les sessions sélectionnées';
$string['attendance:addinstance'] = 'Ajouter une nouvelle activité d\'attente';
$string['attendance:canbelisted'] = 'Apparaît dans le roster';
$string['attendance:changeattendances'] = 'Changement des attentes';
$string['attendance:changepreferences'] = 'Changement des préférences';
$string['attendance:export'] = 'Exporter les rapports';
$string['attendance:import'] = 'Importer des sessions depuis un fichier (csv)';
$string['attendance:manageattendances'] = 'Gérer les attentes';
$string['attendance:managetemporaryusers'] = 'Gérer les utilisateurs temporaires';
$string['attendance:manualautomark'] = 'Autoriser le processus de marquage manuel';
$string['attendance:takeattendances'] = 'Prise des attentes';
$string['attendance:view'] = 'Affichage des attentes';
$string['attendance:viewreports'] = 'Affichage des rapports';
$string['attendance:viewsummaryreports'] = 'Affichage des rapports de résumé du cours';
$string['attendance:warningemails'] = 'Peut être abonné aux emails avec les utilisateurs absents';
$string['attendance_already_submitted'] = 'Votre présence a déjà été déclarée.';
$string['attendance_no_status'] = 'Aucun statut valide n\'était disponible - vous risquez d\'être trop tard pour enregistrer votre présence.';
$string['attendancedata'] = 'Données d\'attente';
$string['attendancefile'] = 'Fichier d\'attente (format csv)';
$string['attendancefile_help'] = 'Le fichier doit être un fichier CSV avec une ligne d\'en-tête et des champs pour identifier l\'utilisateur et le temps d\'attente enregistré, par exemple (email, scantime) ou (username, time)';
$string['attendancegrade'] = 'Note d\'attente';
$string['attendancenotset'] = 'Vous devez définir votre présence';
$string['attendancenotstarted'] = 'L\'attente n\'a pas encore commencé pour ce cours';
$string['attendancepercent'] = 'Pourcentage d\'attente';
$string['attendancereport'] = 'Attente';
$string['attendanceslogged'] = 'Attentes enregistrées';
$string['attendancestaken'] = 'Attentes prises';
$string['attendancesuccess'] = 'La présence a été prise avec succès';
$string['attendanceupdated'] = 'La présence a été mise à jour avec succès';
$string['attendanceuserreport'] = 'Rapport d\'attente';
$string['attforblockdirstillexists'] = 'Le répertoire mod/attforblock existe toujours - vous devez le supprimer de votre serveur avant de lancer cette mise à jour.';
$string['attrecords'] = 'Enregistrements d\'attentes';
$string['autoassignstatus'] = 'Sélectionner automatiquement le meilleur statut disponible';
$string['autoassignstatus_help'] = 'Si cela est sélectionné, les étudiants seront automatiquement assignés au meilleur grade disponible.';
$string['automark'] = 'Marquage automatique';
$string['automark_help'] = 'Permet de compléter le marquage automatiquement.
Si "Oui" les étudiants seront marqués automatiquement en fonction de leur premier accès au cours.
Si "Marquer comme non marqué à la fin de la session" les étudiants qui n\'ont pas marqué leur présence seront marqués comme non marqué.';
$string['automarkall'] = 'Oui';
$string['automarkclose'] = 'Marquer comme non marqué à la fin de la session';
$string['automarkingcomplete'] = 'Marquage automatique terminé';
$string['automarkingnotavailableyet'] = 'Cette session utilise le marquage automatique sur la fermeture de la session et la session n\'a pas encore terminé.';
$string['automarkingnotenabled'] = 'Le marquage automatique n\'est pas activé dans cette session';
$string['automarktask'] = 'Vérifier les sessions d\'attente qui nécessitent un marquage automatique';
$string['automarkuseempty'] = 'Gestion de l\'indisponibilité des statuts';
$string['automarkuseempty_desc'] = 'Si coché, les statuts qui ont un paramètre "Disponible pour" vide/non défini seront autorisés lors du marquage automatique';
$string['autorecorded'] = 'enregistré par le système';
$string['availability'] = 'Disponibilité pour le marquage';
$string['availability_help'] = 'Restreint la disponibilité de ce statut. <br> Si l\'option "Limité" est sélectionnée, fournissez le nombre de minutes que ce statut est disponible après le début de la session. Cela s\'applique lorsque les étudiants marquent leur propre présence.';
$string['availabilityalways'] = 'Toujours';
$string['availabilitylimitedtime'] = 'Temps limité';
$string['availabilityno'] = 'Non';
$string['availablebeforesession'] = 'Disponible avant le début de la session';
$string['availablebeforesession_help'] = 'Lorsque les étudiants marquent leur propre présence, autorisez ce statut à être choisi avant le début de la session.';
$string['averageattendance'] = 'Moyenne d\'attente';
$string['averageattendancegraded'] = 'Moyenne d\'attente';
$string['backtoparticipants'] = 'Retour à la liste des participants';
$string['below'] = 'En dessous de {$a}%';
$string['calclose'] = 'Fermer';
$string['calendarevent'] = 'Créer un événement calendrier pour la session';
$string['calendarevent_help'] = 'Si activé, un événement calendrier sera créé pour cette session.
Si désactivé, tout événement calendrier existant pour cette session sera supprimé.';
$string['caleventcreated'] = 'Événement calendrier pour la session créé avec succès';
$string['caleventdeleted'] = 'Événement calendrier pour la session supprimé avec succès';
$string['calmonths'] = 'Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre';
$string['calshow'] = 'Choisir la date';
$string['calweekdays'] = 'Lu,Ma,Me,Je,Ve,Sa,Di';
$string['cannottakeforgroup'] = 'Vous ne pouvez pas prendre l\'attente pour le groupe "{$a}"';
$string['cannottakethisgroup'] = 'Vous n\'êtes pas un membre du groupe de cours qui est lié à cette session d\'attente, votre présence n\'a pas été enregistrée.';
$string['cantaddstatus'] = 'Vous devez définir un acronyme et une description lors de l\'ajout d\'un nouveau statut.';
$string['canthidestatus'] = 'Vous ne pouvez pas masquer ce statut car il est déjà utilisé dans cette activité d\'attente.';
$string['categoryreport'] = 'Rapport de catégorie de cours';
$string['changeattendance'] = 'Changer l\'attente';
$string['changeduration'] = 'Changer la durée';
$string['changesession'] = 'Changer la session';
$string['checkweekdays'] = 'Sélectionnez les jours de la semaine qui tombent dans la plage de dates de la session.';
$string['closed'] = 'Cette session n\'est pas actuellement disponible pour le marquage automatique';
$string['column'] = 'colonne';
$string['columnmap'] = 'Mapping des colonnes';
$string['columnmap_help'] = 'Pour chaque champ présenté, sélectionnez la colonne correspondante dans le fichier csv.';
$string['columns'] = 'colonnes';
$string['commonsession'] = 'Tous les étudiants';
$string['commonsessions'] = 'Tous les étudiants';
$string['confirm'] = 'Confirmer';
$string['confirmcolumnmappings'] = 'Confirmer les mappings des colonnes';
$string['confirmdeletehiddensessions'] = 'Voulez-vous vraiment supprimer {$a->count} sessions programmées avant la date de début du cours ({$a->date})?';
$string['confirmdeleteuser'] = 'Voulez-vous vraiment supprimer l\'utilisateur \'{$a->fullname}\' ({$a->email})?<br/>Toutes les enregistrements d\'attente de l\'utilisateur seront supprimés définitivement.';
$string['copyfrom'] = 'Copier les données d\'attente de';
$string['countofselected'] = 'Nombre de sélectionnés';
$string['course'] = 'Cours';
$string['coursemessage'] = 'Message aux utilisateurs du cours';
$string['courseshortname'] = 'Nom court du cours';
$string['coursesummary'] = 'Rapport de résumé du cours';
$string['createmultiplesessions'] = 'Créer plusieurs sessions';
$string['createmultiplesessions_help'] = 'Cette fonction vous permet de créer plusieurs sessions en un seul pas simple.
Les sessions commencent la date de la session de base et continuent jusqu\'à la date de \'répétition jusqu\'à\'.

* <strong>Répéter sur</strong>: Sélectionnez les jours de la semaine lorsque votre classe rencontrera (par exemple, lundi/mercredi/vendredi).
* <strong>Répéter tous les</strong>: Cela permet de définir une fréquence. Si votre classe rencontrera chaque semaine, sélectionnez 1; si elle rencontrera tous les deux semaines, sélectionnez 2; tous les trois semaines, sélectionnez 3, etc.
* <strong>Répéter jusqu\'à</strong>: Sélectionnez la dernière journée de classe (la dernière journée que vous souhaitez prendre l\'attente).
';
$string['createonesession'] = 'Créer une session pour le cours';
$string['csvdelimiter'] = 'Délimiteur CSV';
$string['currentlyselectedusers'] = 'Utilisateurs sélectionnés';
$string['customexportfields'] = 'Champs de profil utilisateur personnalisés à exporter';
$string['customexportfields_help'] = 'Champs de profil utilisateur personnalisés supplémentaires à exposer dans le rapport d\'exportation.';
$string['customfields'] = 'Champs de session personnalisés';
$string['date'] = 'Date';
$string['days'] = 'Jours';
$string['defaultdisplaymode'] = 'Mode d\'affichage par défaut';
$string['defaults'] = 'Défauts';
$string['defaultsessionsettings'] = 'Paramètres de session par défaut';
$string['defaultsessionsettings_help'] = 'Ces paramètres définissent les défauts pour toutes les nouvelles sessions';
$string['defaultsettings'] = 'Paramètres d\'attente par défaut';
$string['defaultsettings_help'] = 'Ces paramètres définissent les défauts pour toutes les nouvelles activités d\'attente';
$string['defaultstatus'] = 'Statut par défaut';
$string['defaultsubnet'] = 'Adresse réseau par défaut';
$string['defaultsubnet_help'] = 'L\'enregistrement de l\'attente peut être restreint à des sous-réseaux spécifiques en spécifiant une liste de sous-réseaux partiels ou complets d\'adresses IP, séparés par des virgules. Cette valeur est utilisée par défaut lors de la création de nouvelles sessions.';
$string['defaultview'] = 'Vue par défaut au login';
$string['defaultview_desc'] = 'Cette vue est affichée par défaut aux enseignants au premier login.';
$string['defaultwarnings'] = 'Avertissement par défaut';
$string['defaultwarningsettings'] = 'Paramètres d\'avertissement par défaut';
$string['defaultwarningsettings_help'] = 'Ces paramètres définissent les défauts pour tous les nouveaux avertissements';
$string['delete'] = 'Supprimer';
$string['deletecheckfull'] = 'Êtes-vous sûr de vouloir supprimer complètement le {$a}, y compris tous les données utilisateur ?';
$string['deletedgroup'] = 'Le groupe associé à cette session a été supprimé';
$string['deletehiddensessions'] = 'Supprimer toutes les sessions cachées';
$string['deletelogs'] = 'Supprimer les données d\'attente';
$string['deleteselected'] = 'Supprimer';
$string['deletesession'] = 'Supprimer la session';
$string['deletesessions'] = 'Supprimer toutes les sessions';
$string['deleteuser'] = 'Supprimer l\'utilisateur';
$string['deletewarningconfirm'] = 'Êtes-vous sûr de vouloir supprimer cet avertissement ?';
$string['deletingsession'] = 'Suppression de la session pour le cours';
$string['deletingstatus'] = 'Suppression du statut pour le cours';
$string['description'] = 'Description';
$string['display'] = 'Afficher';
$string['displaymode'] = 'Mode d\'affichage';
$string['donotusepaging'] = 'Ne pas utiliser la pagination';
$string['downloadexcel'] = 'Télécharger dans le format Excel';
$string['downloadooo'] = 'Télécharger dans le format OpenOffice';
$string['downloadtext'] = 'Télécharger dans le format texte';
$string['duration'] = 'Durée';
$string['editsession'] = 'Modifier la session';
$string['edituser'] = 'Modifier l\'utilisateur';
$string['emailcontent'] = 'Contenu de l\'email';
$string['emailcontent_default'] = 'Bonjour %userfirstname%,
Votre présence dans %coursename% %attendancename% a chuté en dessous de %warningpercent% et est actuellement à %percent% - nous espérons que vous allez bien !

Pour tirer le meilleur parti de ce cours, vous devriez améliorer votre présence, veuillez nous contacter si vous avez besoin de plus d\'informations.';
$string['emailcontent_help'] = 'Lorsqu\'un avertissement est envoyé à un étudiant, il prend le contenu de cet champ. Les wildcards suivantes peuvent être utilisées :
<ul>
    <li>%coursename%</li>
    <li>%userfirstname%</li>
    <li>%userlastname%</li>
    <li>%userid%</li>
    <li>%warningpercent%</li>
    <li>%attendancename%</li>
    <li>%cmid%</li>
    <li>%numtakensessions%</li>
    <li>%points%</li>
    <li>%maxpoints%</li>
    <li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Sujet de l\'email';
$string['emailsubject_default'] = 'Avertissement d\'attente';
$string['emailsubject_help'] = 'Lorsqu\'un avertissement est envoyé à un étudiant, il prend le sujet de l\'email de ce champ.';
$string['emailuser'] = 'Email de l\'utilisateur';
$string['emailuser_help'] = 'Si coché, un avertissement sera envoyé à l\'étudiant.';
$string['emptyacronym'] = 'Les acronymes vides ne sont pas autorisés. Enregistrement du statut non mis à jour.';
$string['emptydescription'] = 'Les descriptions vides ne sont pas autorisées. Enregistrement du statut non mis à jour.';
$string['enablecalendar'] = 'Créer des événements calendrier';
$string['enablecalendar_desc'] = 'Si activé, un événement calendrier sera créé pour chaque session d\'attente. Après avoir changé cette option, vous devriez exécuter le rapport de réinitialisation du calendrier.';
$string['enablewarnings'] = 'Activer les avertissements';
$string['enablewarnings_desc'] = 'Permet de définir un avertissement pour une attente et les notifications par email aux utilisateurs lorsque l\'attente tombe en dessous du seuil configuré. <br/><strong>ATTENTION: Cette fonctionnalité est nouvelle et n\'a pas été testée. Veuillez l\'utiliser à vos risques et périls et fournir des retours dans les forums Moodle si vous la trouvez efficace.</strong>';
$string['encoding'] = 'Encodage';
$string['encoding_help'] = 'Cela fait référence au type d\'encodage de code-barres utilisé sur la carte d\'identité des étudiants. Les types de schémas d\'encodage de code-barres courants incluent Code-39, Code-128 et UPC-A.';
$string['endofperiod'] = 'Fin de période';
$string['endtime'] = 'Heure de fin de la session';
$string['enrolmentend'] = 'L\'inscription de l\'utilisateur se termine {$a}';
$string['enrolmentstart'] = 'L\'inscription de l\'utilisateur commence {$a}';
$string['enrolmentsuspended'] = 'L\'inscription est suspendue';
$string['enterpassword'] = 'Entrer le mot de passe';
$string['error:coursehasnoattendance'] = 'Le cours avec le nom court {$a} n\'a pas d\'activité d\'attente.';
$string['error:coursenotfound'] = 'Un cours avec le nom court {$a} n\'a pas été trouvé.';
$string['error:qrcode'] = 'L\'enregistrement de l\'attente propre doit être activé pour utiliser le code QR ! Skipping.';
$string['error:sessioncourseinvalid'] = 'Une session de cours est invalide ! Skipping.';
$string['error:sessiondateinvalid'] = 'Une date de session est invalide ! Skipping.';
$string['error:sessionendinvalid'] = 'Une heure de fin de session est invalide ! Skipping.';
$string['error:sessionstartinvalid'] = 'Une heure de début de session est invalide ! Skipping.';
$string['error:statusnotfound'] = 'L\'utilisateur: {$a->extuser} a une valeur de statut qui n\'a pas été trouvée: {$a->status}';
$string['error:timenotreadable'] = 'L\'utilisateur: {$a->extuser} a un scantime qui n\'a pas pu être converti par strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'L\'utilisateur {$a} a été trouvé deux fois dans l\'importation. Veuillez n\'inclure qu\'un enregistrement par utilisateur.';
$string['error:usernotfound'] = 'Un utilisateur avec le {$a->userfield} défini sur {$a->extuser} n\'a pas été trouvé dans ce cours';
$string['errorgroupsnotselected'] = 'Sélectionnez un ou plusieurs groupes';
$string['errorinaddingsession'] = 'Erreur lors de l\'ajout de la session';
$string['erroringeneratingsessions'] = 'Erreur lors de la génération de sessions';
$string['eventdurationupdated'] = 'Durée de la session mise à jour';
$string['eventreportviewed'] = 'Rapport d\'attente consulté';
$string['eventscreated'] = 'Événements calendrier créés';
$string['eventsdeleted'] = 'Événements calendrier supprimés';
$string['eventsessionadded'] = 'Session ajoutée';
$string['eventsessiondeleted'] = 'Session supprimée';
$string['eventsessionipshared'] = 'Conflit d\'adresse IP pour l\'enregistrement de l\'attente propre';
$string['eventsessionsimported'] = 'Sessions importées';
$string['eventsessionupdated'] = 'Session mise à jour';
$string['eventstatusadded'] = 'Statut ajouté';
$string['eventstatusupdated'] = 'Statut mis à jour';
$string['eventstudentattendancesessionsupdated'] = 'Rapport de session mis à jour';
$string['eventstudentattendancesessionsviewed'] = 'Rapport de session consulté';
$string['eventtaken'] = 'Attente prise';
$string['eventtakenbystudent'] = 'Attente prise par l\'étudiant';
$string['export'] = 'Export';
$string['extrarestrictions'] = 'Restrictions supplémentaires';
$string['formattexttype'] = 'Formatage';
$string['from'] = 'de:';
$string['gradebookexplanation'] = 'Note dans le gradebook';
$string['gradebookexplanation_help'] = 'Le module d\'attente affiche votre note actuelle d\'attente basée sur le nombre de points que vous avez acquis à ce jour et le nombre de points que vous pourriez avoir acquis à ce jour; il ne comprend pas les périodes de classe à venir. Dans le gradebook, votre note d\'attente est basée sur votre pourcentage actuel d\'attente et le nombre de points que vous pouvez obtenir sur la durée de la formation, y compris les périodes de classe à venir. Par conséquent, votre note d\'attente affichée dans le module d\'attente et dans le gradebook peut ne pas être le même nombre de points mais ce sont les mêmes pourcentages.

Par exemple, si vous avez acquis 8 points sur 10 (80% d\'attente) et que l\'attente pour toute la formation vaut 50 points, le module d\'attente affichera 8/10 et le gradebook affichera 40/50. Vous n\'avez pas encore acquis 40 points mais 40 est la valeur de point équivalente à votre pourcentage actuel d\'attente de 80%. La valeur de point que vous avez acquis dans le module d\'attente ne peut jamais diminuer, car elle est basée uniquement sur l\'attente à ce jour; cependant, la valeur de point d\'attente affichée dans le gradebook peut augmenter ou diminuer en fonction de votre future attente, car elle est basée sur l\'attente pour toute la formation.';
$string['graded'] = 'Sessions notées';
$string['gridcolumns'] = 'Colonnes de grille';
$string['group'] = 'Groupe';
$string['groups'] = 'Groupes';
$string['groupsession'] = 'Groupe d\'étudiants';
$string['groupsessionsby'] = 'Groupes de sessions par';
$string['hiddensessions'] = 'Sessions cachées';
$string['hiddensessions_help'] = 'Les sessions sont cachées si elles sont programmées avant la date de début du cours.

Vous pouvez utiliser cette fonctionnalité pour masquer les sessions plus anciennes au lieu de les supprimer. Seules les sessions visibles apparaîtront dans le gradebook.';
$string['hiddensessionsdeleted'] = 'Toutes les sessions cachées ont été supprimées';
$string['hideextrauserdetails'] = 'Masquer les détails utilisateur supplémentaires';
$string['hidensessiondetails'] = 'Masquer les détails de la session';
$string['identifyby'] = 'Identifier l\'étudiant par';
$string['import'] = 'Importer';
$string['importfile'] = 'Importer le fichier';
$string['importfile_help'] = 'Le fichier CSV doit contenir un en-tête et les champs pour identifier les groupes, les heures et les dates des sessions à créer.<br/>La page suivante après le dépôt du fichier affichera des exemples de tous les champs que vous pouvez mapper à vos propres champs.<br/>Exemple :<br/>groups;sessiondate;from;to<br/>groupA:05-10-2022;13:00;14:00<br/>groupB;05-10-2022;14:00;15:00';
$string['importsessions'] = 'Importer les sessions';
$string['importstatus'] = 'Champ de statut';
$string['importstatus_help'] = 'Permet d\'inclure une valeur de statut dans l\'importation - par exemple les valeurs comme P, L ou A';
$string['includeabsentee'] = 'Inclure la session lors du calcul du rapport d\'absentéisme';
$string['includeabsentee_help'] = 'Si coché, cette session sera incluse dans les calculs du rapport d\'absentéisme.';
$string['includeall'] = 'Sélectionner toutes les sessions';
$string['includedescription'] = 'Inclure la description de la session';
$string['includenottaken'] = 'Inclure les sessions non prises';
$string['includeqrcode'] = 'Inclure le code QR';
$string['includeremarks'] = 'Inclure les remarques';
$string['incorrectpassword'] = 'Vous avez entré un mot de passe incorrect et votre attente n\'a pas été enregistrée, veuillez entrer le mot de passe correct.';
$string['incorrectpasswordshort'] = 'Mot de passe incorrect, attente non enregistrée.';
$string['indetail'] = 'En détail...';
$string['indicator:cognitivedepth'] = 'Attente cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité d\'attente.';
$string['indicator:cognitivedepthdef'] = 'Attente cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par l\'attente pendant cette période d\'analyse (Niveaux = Aucune vue, Vue)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Attente sociale';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur la largeur sociale atteinte par l\'étudiant dans une activité d\'attente.';
$string['indicator:socialbreadthdef'] = 'Attente sociale';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par l\'attente pendant cette période d\'analyse (Niveaux = Aucune participation, Participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Vous devez sélectionner une action';
$string['invalidemails'] = 'Vous devez spécifier les adresses de comptes utilisateur existants, ne pouvant pas trouver: {$a}';
$string['invalidimportfile'] = 'Le format du fichier est invalide.';
$string['invalidsessionenddate'] = 'Cette date ne peut pas être antérieure à la date de la session';
$string['invalidsessionendtime'] = 'L\'heure de fin doit être supérieure à l\'heure de début';
$string['invalidstatus'] = 'Vous avez sélectionné un statut invalide, veuillez réessayer';
$string['iptimemissing'] = 'Minutes manquantes pour libérer';
$string['jumpto'] = 'Aller à';
$string['keepsearching'] = 'Continuer à rechercher';
$string['lasttaken'] = 'Attentes prises';
$string['manualtriggerauto'] = 'Déclencher manuellement le marquage automatique';
$string['marksessionimportcsvhelp'] = 'Ce formulaire vous permet de télécharger un fichier CSV contenant un identifiant d\'utilisateur et un statut - le champ de statut peut être l\'acronyme du statut ou le temps que l\'attente a été enregistrée pour cet utilisateur. Si une valeur de temps est passée, il tentera d\'attribuer la valeur du statut avec la note la plus élevée disponible à ce moment.';
$string['maxpossible'] = 'Maximum possible';
$string['maxpossible_help'] = 'Affiche la note que chaque utilisateur peut atteindre si elles reçoivent le maximum de points dans chaque session non encore prises (passées et futures):
<ul>
    <li><strong>Points</strong>: maximum points que chaque utilisateur peut atteindre sur toutes les sessions.</li>
    <li><strong>Percentage</strong>: maximum pourcentage que chaque utilisateur peut atteindre sur toutes les sessions.</li>
</ul>';
$string['maxpossiblepercentage'] = 'Maximum possible percentage';
$string['maxpossiblepoints'] = 'Maximum possible points';
$string['maxwarn'] = 'Maximum number of e-mail warnings';
$string['maxwarn_help'] = 'Le nombre maximum de fois où un avertissement doit être envoyé (un seul avertissement par session est envoyé)';
$string['mergeuser'] = 'Fusionner l\'utilisateur';
$string['messagedselecteduserfailed'] = 'Échec de l\'envoi d\'un message à un ou plusieurs utilisateurs. Veuillez activer le débogage pour en savoir plus.';
$string['mobilesessionfrom'] = 'Afficher les sessions plus anciennes que la dernière';
$string['mobilesessionfrom_help'] = 'Permet de restreindre la liste des sessions à marquer dans l\'application - n\'affiche que les sessions qui ont commencé depuis cette valeur';
$string['mobilesessionto'] = 'Afficher les sessions futures';
$string['mobilesessionto_help'] = 'Permet de restreindre la liste des sessions à afficher uniquement un petit nombre de sessions futures.';
$string['mobilesettings'] = 'Paramètres de l\'application mobile';
$string['mobilesettings_help'] = 'Ces paramètres contrôlent le comportement de l\'application mobile Moodle';
$string['modulename'] = 'Attente';
$string['modulename_help'] = 'Le module d\'attente permet à un enseignant de prendre l\'attente pendant la classe et à des étudiants de consulter leur attente propre.

L\'enseignant peut créer plusieurs sessions et peut marquer le statut d\'attente comme "Présent", "Absent", "En retard", ou "Excusé" ou modifier les statuts pour répondre à ses besoins.

Les rapports sont disponibles pour la classe entière ou les étudiants individuels.';
$string['modulenameplural'] = 'Attentes';
$string['months'] = 'Mois';
$string['moreattendance'] = 'L\'attente a été prise avec succès pour cette page';
$string['moveleft'] = 'Déplacer à gauche';
$string['moveright'] = 'Déplacer à droite';
$string['multisessionexpanded'] = 'Sessions multiples développées';
$string['multisessionexpanded_desc'] = 'Afficher les paramètres "Sessions multiples" développés par défaut lors de la création de nouvelles sessions.';
$string['mustselectusers'] = 'Veuillez sélectionner des utilisateurs à exporter';
$string['name'] = 'Nom';
$string['newdate'] = 'Nouvelle date';
$string['newduration'] = 'Nouvelle durée';
$string['newstatusset'] = 'Nouveau jeu de statuts';
$string['noabsentstatusset'] = 'Le jeu de statuts en cours n\'a pas de statut à utiliser lorsque l\'attente n\'est pas marquée.';
$string['noattendanceusers'] = 'Il n\'est pas possible d\'exporter des données car il n\'y a pas d\'étudiants inscrits dans le cours.';
$string['noattforuser'] = 'Aucun enregistrement d\'attente existe pour l\'utilisateur';
$string['noautomark'] = 'Désactivé';
$string['nocapabilitytotakethisattendance'] = 'Vous avez essayé de modifier l\'attente d\'une session avec le cmid: {$a} que vous n\'avez pas le droit de modifier.';
$string['nodescription'] = 'Session de classe régulière';
$string['noeventstoreset'] = 'Il n\'y a pas d\'événements calendrier qui nécessitent une mise à jour.';
$string['nogroups'] = 'Cette activité a été configurée pour utiliser des groupes, mais aucun groupe n\'existe dans le cours.';
$string['noguest'] = 'Les invités ne peuvent pas voir l\'attente';
$string['noofdaysabsent'] = 'Nombre de jours absents';
$string['noofdaysexcused'] = 'Nombre de jours excusés';
$string['noofdayslate'] = 'Nombre de jours en retard';
$string['noofdayspresent'] = 'Nombre de jours présents';
$string['nosessiondayselected'] = 'Aucune journée de session sélectionnée';
$string['nosessionexists'] = 'Aucune session n\'existe pour ce cours';
$string['nosessionsselected'] = 'Aucune session sélectionnée';
$string['notfound'] = 'L\'activité d\'attente n\'a pas été trouvée dans ce cours!';
$string['notifytask'] = 'Envoyer les avertissements aux utilisateurs';
$string['notmember'] = 'non&nbsp;membre';
$string['notset'] = 'non défini';
$string['nounmarkedstatusset'] = 'Aucun statut non marqué n\'est configuré pour cette session (id:{$a->sessionid}), pour corriger cela, mettez à jour le <a href="{$a->url}">jeu de statuts</a>';
$string['noupgradefromthisversion'] = 'Le module d\'attente ne peut pas mettre à niveau à partir de la version de attforblock que vous avez installée. - veuillez supprimer attforblock ou mettre à niveau vers la dernière version avant d\'installer le nouveau module d\'attente';
$string['numsessions'] = 'Nombre de sessions';
$string['numsessionstaken'] = 'Nombre de sessions prises';
$string['olddate'] = 'Date ancienne';
$string['onactivitycompletion'] = 'Au complet de l\'activité';
$string['onlyselectedusers'] = 'Exporter des utilisateurs spécifiques';
$string['overallsessions'] = 'Sur toutes les sessions';
$string['overallsessions_help'] = 'Affiche les statistiques pour toutes les sessions, y compris celles qui n\'ont pas encore été prises (passées et futures):
<ul>
    <li><strong>Sessions</strong>: nombre total de sessions.</li>
    <li><strong>Points</strong>: points attribués sur la base des sessions prises.</li>
    <li><strong>Percentage</strong>: pourcentage de points attribués sur la base des sessions prises.</li>
</ul>';
$string['oversessionstaken'] = 'Sur les sessions prises';
$string['oversessionstaken_help'] = 'Affiche les statistiques pour les sessions où l\'attente a été prise:
<ul>
    <li><strong>Sessions</strong>: nombre de sessions déjà prises.</li>
    <li><strong>Points</strong>: points attribués sur la base des sessions prises.</li>
    <li><strong>Percentage</strong>: pourcentage de points attribués sur la base des sessions prises.</li>
</ul>';
$string['pageof'] = 'Page {$a->page} de {$a->numpages}';
$string['participant'] = 'Participant';
$string['password'] = 'Mot de passe';
$string['passwordgrp'] = 'Mot de passe de l\'étudiant';
$string['passwordgrp_help'] = 'Si défini, les étudiants devront entrer ce mot de passe avant de pouvoir définir leur propre statut d\'attente pour la session. Si vide, aucun mot de passe n\'est requis.';
$string['passwordheader'] = 'Utilisez le mot de passe ci-dessous pour prendre votre attente';
$string['passwordrequired'] = 'Vous devez entrer le mot de passe de la session avant de pouvoir soumettre votre attente';
$string['percentage'] = 'Pourcentage';
$string['percentageallsessions'] = 'Pourcentage sur toutes les sessions';
$string['percentagesessionscompleted'] = 'Pourcentage sur les sessions prises';
$string['pluginadministration'] = 'Administration de l\'attente';
$string['pluginname'] = 'Attente';
$string['points'] = 'Points';
$string['pointsallsessions'] = 'Points sur toutes les sessions';
$string['pointssessionscompleted'] = 'Points sur les sessions prises';
$string['preferences_desc'] = 'Changes to status sets will affect existing attendance sessions and may affect grading.';
$string['preventsharederror'] = 'La prise d\'attente a été désactivée pour une session car cet appareil semble avoir été utilisé pour enregistrer l\'attente pour un autre étudiant.';
$string['preventsharedip'] = 'Empêcher les étudiants de partager l\'adresse IP';
$string['preventsharedip_help'] = 'Empêcher les étudiants d\'utiliser le même appareil (identifié à l\'aide de l\'adresse IP) pour prendre l\'attente pour d\'autres étudiants.';
$string['preventsharediptime'] = 'Temps pour permettre la réutilisation de l\'adresse IP (minutes)';
$string['preventsharediptime_help'] = 'Permet de réutiliser une adresse IP pour prendre l\'attente dans cette session après que ce temps soit écoulé.';
$string['preview'] = 'Aperçu du fichier';
$string['previewhtml'] = 'Aperçu HTML';
$string['priorto'] = 'La date de la session est antérieure à la date de début du cours ({$a}) de sorte que les nouvelles sessions programmées avant cette date seront masquées (non accessibles). Vous pouvez modifier la date de début du cours à tout moment (voir les paramètres du cours) pour accéder à des sessions plus anciennes.<br><br>Veuillez modifier la date de la session ou cliquez simplement sur le bouton "Ajouter une session" à nouveau pour confirmer?';
$string['privacy:metadata:attendancelog'] = 'Log des prises d\'attente des utilisateurs enregistrées.';
$string['privacy:metadata:attendancesessions'] = 'Sessions pour lesquelles l\'attente sera enregistrée.';
$string['privacy:metadata:attendancewarningdone'] = 'Log des avertissements envoyés aux utilisateurs sur leur enregistrement d\'attente.';
$string['privacy:metadata:duration'] = 'Durée de la session en secondes';
$string['privacy:metadata:groupid'] = 'ID du groupe associé à la session.';
$string['privacy:metadata:ipaddress'] = 'Adresse IP à partir de laquelle l\'attente a été marquée.';
$string['privacy:metadata:lasttaken'] = 'Timestamp de la dernière prise d\'attente de la session.';
$string['privacy:metadata:lasttakenby'] = 'ID de l\'utilisateur qui a pris l\'attente dans cette session';
$string['privacy:metadata:notifyid'] = 'ID de la session d\'attente avec laquelle l\'avertissement est associé.';
$string['privacy:metadata:remarks'] = 'Commentaires sur l\'attente de l\'utilisateur.';
$string['privacy:metadata:sessdate'] = 'Timestamp de la date de début de la session.';
$string['privacy:metadata:sessionid'] = 'ID de la session d\'attente.';
$string['privacy:metadata:statusid'] = 'ID du statut d\'attente de l\'étudiant.';
$string['privacy:metadata:statusset'] = 'Jeu de statuts auquel appartient l\'ID de statut.';
$string['privacy:metadata:studentid'] = 'ID de l\'étudiant dont l\'attente est enregistrée.';
$string['privacy:metadata:takenby'] = 'ID de l\'utilisateur qui a pris l\'attente pour l\'étudiant.';
$string['privacy:metadata:timemodified'] = 'Timestamp de la dernière modification de la session.';
$string['privacy:metadata:timesent'] = 'Timestamp de l\'envoi de l\'avertissement.';
$string['privacy:metadata:timetaken'] = 'Timestamp de la prise d\'attente de l\'attente pour l\'étudiant.';
$string['privacy:metadata:userid'] = 'ID de l\'utilisateur à avertir.';
$string['processingfile'] = 'Traitement du fichier';
$string['qr_cookie_error'] = 'La session QR a expiré.';
$string['qr_pass_wrong'] = 'Le code QR a expiré, veuillez scanner le code QR à nouveau.';
$string['qrcode'] = 'Code QR';
$string['qrcodeandpasswordheader'] = 'Scannez le code QR ci-dessous ou utilisez le mot de passe ci-dessous pour prendre votre attente';
$string['qrcodeheader'] = 'Scannez le code QR ci-dessous pour prendre votre attente';
$string['qrcodevalidafter'] = 'secondes';
$string['qrcodevalidbefore'] = 'Code QR valide pour:';
$string['randompassword'] = 'Mot de passe aléatoire';
$string['remark'] = 'Commentaire pour: {$a}';
$string['remarks'] = 'Commentaires';
$string['repeatasfollows'] = 'Répétez la session ci-dessus comme suit';
$string['repeatevery'] = 'Répéter toutes les';
$string['repeaton'] = 'Répéter le';
$string['repeatuntil'] = 'Répéter jusqu\'à';
$string['report'] = 'Rapport';
$string['reportsessiondate'] = 'Date de la session';
$string['reportsessionduration'] = 'Durée de la session';
$string['reportsessionlasttaken'] = 'Temps de la dernière prise d\'attente de la session (enseignant)';
$string['required'] = 'Requis*';
$string['requiredentries'] = 'Enregistrements temporaires remplacer les enregistrements d\'attente des participants';
$string['requiredentry'] = 'Aide pour fusionner les comptes';
$string['requiredentry_help'] = '<p align="center"><b>Attente</b></p>
<p align="left"><strong>Fusionner les comptes</strong></p>
<p align="left">
<table border="2" cellpadding="4">
    <tr>
        <th>Moodle User</th>
        <th>Temporary User</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>Attendance data</td>
        <td>Attendance data</td>
        <td>Temporary user will override Moodle user</td>
    </tr>
    <tr>
        <td>No attendance data</td>
        <td>Attendance data</td>
        <td>Temporary user attendance will be transfered to Moodle user</td>
    </tr>
    <tr>
        <td>Attendance data</td>
        <td>No attendance data</td>
        <td>Temporary user will be deleted</td>
    </tr>
    <tr>
        <td>No attendance data</td>
        <td>No attendance data</td>
        <td>Temporary user will be deleted</td>
    </tr>
</table>

</p>
<p align="left"><strong>Temporay user will be deleted in all cases after merge action</strong></p>';
$string['requiresubnet'] = 'Require network address';
$string['requiresubnet_help'] = 'Attendance recording may be restricted to particular subnets by specifying a comma-separated list of partial or full IP addresses.';
$string['resetcaledarcreate'] = 'Calendar events have been enabled but a number of existing sessions do not have events. Do you want to create calendar events for all existing sessions?';
$string['resetcaledardelete'] = 'Calendar events have been disabled but a number of existing sessions have events that should be deleted. Do you want to delete all existing events?';
$string['resetcalendar'] = 'Reset calendar';
$string['resetdescription'] = 'Remember that deleting attendance data will erase information from database. You can just hide older sessions having changed start date of course!';
$string['resetstatuses'] = 'Reset statuses to default';
$string['restoredefaults'] = 'Restore defaults';
$string['resultsperpage'] = 'Results per page';
$string['resultsperpage_desc'] = 'Number of students displayed on a page';
$string['rotateqrcode'] = 'Rotate QR code';
$string['rotateqrcode_cleartemppass_task'] = 'Task to clear temporary passwords generated by rotate QR code functionality.';
$string['rotateqrcodeexpirymargin'] = 'Rotate QR code/password expiry margin (seconds)';
$string['rotateqrcodeexpirymargin_desc'] = 'Time interval (seconds) to allow expired QR code/password by.';
$string['rotateqrcodeinterval'] = 'Rotate QR code/password interval (seconds)';
$string['rotateqrcodeinterval_desc'] = 'Time interval (seconds) to rotate QR code/password by.';
$string['save'] = 'Save attendance';
$string['saveandshownext'] = 'Save and show next page';
$string['scantime'] = 'Scan time';
$string['scantime_help'] = 'This allows a timestamp to be included in the import file - it will attempt to convert the timestamp passed using the PHP strtotime function and then use attendance status settings to decide which status to set for the user';
$string['search:activity'] = 'Attendance - activity information';
$string['selectactivity'] = 'Select activity';
$string['session'] = 'Session';
$string['session_help'] = 'Session';
$string['sessionadded'] = 'Session successfully added';
$string['sessionalreadyexists'] = 'Session already exists for this date';
$string['sessiondate'] = 'Date';
$string['sessiondays'] = 'Session Days';
$string['sessiondeleted'] = 'Session successfully deleted';
$string['sessiondescription'] = 'Session description';
$string['sessionduplicate'] = 'A duplicate session exists for course: {$a->course} in attendance: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Session not added (already exists)!';
$string['sessiongenerated'] = 'One session was successfully generated';
$string['sessions'] = 'Sessions';
$string['sessionsallcourses'] = 'All courses';
$string['sessionsbyactivity'] = 'Attendance instance';
$string['sessionsbycourse'] = 'Course';
$string['sessionsbydate'] = 'Week';
$string['sessionscompleted'] = 'Taken sessions';
$string['sessionscurrentcourses'] = 'Current courses';
$string['sessionsgenerated'] = '{$a} sessions were successfully generated';
$string['sessionsids'] = 'IDs of sessions: ';
$string['sessionsnotfound'] = 'There is no sessions in the selected timespan';
$string['sessionstartdate'] = 'Session start date';
$string['sessionstotal'] = 'Total number of sessions';
$string['sessionsupdated'] = 'Sessions updated';
$string['sessiontype'] = 'Type';
$string['sessiontype_help'] = 'You can add sessions for all students or for a group of students. Ability to add different types depends on activity group mode.

* In group mode "No groups" you can add only sessions for all students.
* In group mode "Separate groups" you can add only sessions for a group of students.
* In group mode "Visible groups" you can add both types of sessions.
';
$string['sessiontypeshort'] = 'Type';
$string['sessionunknowngroup'] = 'A session specifies unknown group(s): {$a}';
$string['sessionupdated'] = 'Session successfully updated';
$string['set_by_student'] = 'Self-recorded';
$string['setallstatuses'] = 'Set status for';
$string['setallstatusesto'] = 'Set status to «{$a}»';
$string['setperiod'] = 'Specified time in minutes to release IP';
$string['settings'] = 'Settings';
$string['setunmarked'] = 'Automatically set when not marked';
$string['setunmarked_help'] = 'If enabled in the session, set this status if a student has not marked their own attendance.';
$string['showdefaults'] = 'Show defaults';
$string['showduration'] = 'Show duration';
$string['showextrauserdetails'] = 'Show extra user details';
$string['showqrcode'] = 'Show QR code';
$string['showsessiondescriptiononreport'] = 'Show session description in report';
$string['showsessiondescriptiononreport_desc'] = 'Show the session description in the attendance report listing.';
$string['showsessiondetails'] = 'Show session details';
$string['somedisabledstatus'] = '(Some options have been removed as the session has started.)';
$string['sortedgrid'] = 'Sorted grid';
$string['sortedlist'] = 'Sorted list';
$string['startofperiod'] = 'Start of period';
$string['starttime'] = 'Start time';
$string['status'] = 'Status';
$string['statusall'] = 'all';
$string['statusdeleted'] = 'Status deleted';
$string['statuses'] = 'Statuses';
$string['statusset'] = 'Status set {$a}';
$string['statussetsettings'] = 'Status set';
$string['statustotalcount'] = 'Status {$a} - Total count';
$string['statustotalcountcurrentweek'] = 'Status {$a} - Total count for current week';
$string['statustotalcountpreviousweek'] = 'Status {$a} - Total count for previous week';
$string['statusunselected'] = 'unselected';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
// phpcs:disable moodle.Files.LangFilesOrdering.UnexpectedComment
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p'; // Line added to allow multiple sessions in the same day.
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'Student ID';
$string['studentmarked'] = 'Your attendance in this session has been recorded.';
$string['studentmarking'] = 'Student recording';
$string['studentpassword'] = 'Student password';
$string['studentrecordingexpanded'] = 'Student recording expanded';
$string['studentrecordingexpanded_desc'] = 'Show the "Student recording" settings as expanded by default when creating new sessions.';
$string['studentscanmark'] = 'Allow students to record own attendance';
$string['studentscanmark_desc'] = 'If checked, teachers will be able to allow students to mark their own attendance.';
$string['studentscanmark_help'] = 'If checked students will be able to change their own attendance status for the session.';
$string['studentscanmarksessiontime'] = 'Students record attendance during session time';
$string['studentscanmarksessiontime_desc'] = 'If checked students can only record their attendance during the session.';
$string['studentscanmarksessiontimeend'] = 'Session end (minutes)';
$string['studentscanmarksessiontimeend_desc'] = 'If the session does not have an end time, how many minutes should the session be available for students to record their attendance.';
$string['studentsearlyopentime'] = 'Open session early for marking';
$string['studentsearlyopentime_help'] = 'This allows teachers to open the session early, alowing for attendance to be taken before the real start time.';
$string['submit'] = 'Submit';
$string['submitattendance'] = 'Submit attendance';
$string['submitattendancefuture'] = 'Report future absence';
$string['submitpassword'] = 'Submit password';
$string['subnet'] = 'Subnet';
$string['subnetactivitylevel'] = 'Allow subnet config at activity level';
$string['subnetactivitylevel_desc'] = 'If enabled, teachers can override the default subnet at the activity level when creating an attendance. Otherwise the site default will be used when creating a session.';
$string['subnetwrong'] = 'Attendance can only be recorded from certain locations, and this computer is not on the allowed list.';
$string['summary'] = 'Summary';
$string['tablerenamefailed'] = 'Rename of old attforblock table to attendance failed';
$string['tactions'] = 'Action';
$string['takeattendance'] = 'Take attendance';
$string['takensessions'] = 'Taken sessions';
$string['tcreated'] = 'Created';
$string['thirdpartyemailtextfooter_desc'] = '';  
$string['customfield_shortname'] = 'Theorical time';
$string['customfield_shortname_desc'] = 'Name the custom field to be used for theorical time';
$string['tempaddform'] = 'Add temporary user';
$string['tempexists'] = 'There is already a temporary user with this email address';
$string['temptable'] = 'List of temporary users';
$string['tempuser'] = 'Temporary user';
$string['tempusermerge'] = 'Merge temporary user';
$string['tempusers'] = 'Temporary users';
$string['tempusersedit'] = 'Edit temporary user';
$string['tempuserslist'] = 'Temporary users';
$string['thirdpartyemails'] = 'Notify other users';
$string['thirdpartyemails_help'] = 'List of other users who will be notified. (requires the capability mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Attendance warning';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} attendance within {$a->coursename} {$a->aname} is lower than {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Vous recevez cet email car le moniteur de ce cours a ajouté votre email à la liste des destinataires';
$string['theoreticaltime'] = 'Temps théorique (minutes)';
$string['minutes'] = 'minutes';
$string['theoretical_time_exceeded'] = 'Le temps théorique ne peut pas dépasser {$a} minutes';
$string['thiscourse'] = 'Ce cours';
$string['time'] = 'Temps';
$string['timeahead'] = 'Multiple sessions that exceed one year cannot be created, please adjust the start and end dates.';
$string['timemodified'] = 'Time modified';
$string['timetaken'] = 'Time attendance taken';
$string['to'] = 'to:';
$string['todate'] = 'to date';
$string['totalnumsessions'] = 'Total number of sessions';
$string['triggered'] = 'First notified';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Full name';
$string['ungraded'] = 'Ungraded sessions';
$string['unknowngroup'] = 'Unknown group';
$string['unknownstatus'] = 'Unknown status id: {$a}';
$string['update'] = 'Update';
$string['updateattendance'] = 'Update attendance';
$string['uploadattendance'] = 'Upload attendance by CSV';
$string['usedefaultsubnet'] = 'Use default';
$string['usemessageform'] = 'or use the form below to send a message to the selected students';
$string['userexistingstatus'] = 'Your attendance has already been marked as: <strong>{$a}</strong>, use the form below to change this if required.';
$string['userexists'] = 'There is already a real user with this email address';
$string['userid'] = 'User ID';
$string['userimportfield'] = 'External user field';
$string['userimportfield_help'] = 'Field from uploaded CSV that contains user identifier';
$string['userimportto'] = 'Moodle user field';
$string['userimportto_help'] = 'Moodle field that matches the data from the CSV export';
$string['users'] = 'Users to export';
$string['usersessiongrade'] = 'User session grade';
$string['usersessionremarks'] = 'User session remarks';
$string['usersessiontaken'] = 'User session taken';
$string['userstatus'] = 'User session status';
$string['usestatusset'] = 'Status set';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables successfully updated';
$string['versionforprinting'] = 'version for printing';
$string['viewmode'] = 'View mode';
$string['warnafter'] = 'Number of sessions taken before warning';
$string['warnafter_help'] = 'Warnings will only be triggered when the user has had their attendance taken for at least this number of sessions.';
$string['warningdeleted'] = 'Warning deleted';
$string['warningdesc'] = 'These warnings will be automatically added to any new attendance activities. If more than one warning is triggered at exactly the same time, only the warning with the lower warning threshold will be sent.';
$string['warningdesc_course'] = 'Warnings thresholds set here affect the absentee report and allow students and third parties to be notified.  If more than one warning is triggered at exactly the same time, only the warning with the lower warning threshold will be sent.';
$string['warningfailed'] = 'You cannot create a warning that uses the same percentage and number of sessions.';
$string['warningpercent'] = 'Warn if percentage falls under';
$string['warningpercent_help'] = 'A warning will be triggered when the overall percentage falls below this number.';
$string['warnings'] = 'Warnings set';
$string['warningthreshold'] = 'Warning threshold';
$string['warningupdated'] = 'Updated warnings';
$string['week'] = 'week(s)';
$string['weekcommencing'] = 'Week commencing';
$string['weeks'] = 'Semaines';
$string['youcantdo'] = 'Vous ne pouvez rien faire';
$string['nousers'] = 'Aucun utilisateur inscrit trouvé pour prendre l\'attente.';
$string['selectstudents'] = 'Sélectionner les candidats';
$string['selectteacher'] = 'Sélectionner le moniteur';
$string['selectstudents_help'] = 'Sélectionnez les candidats qui peuvent gérer la présence pour cette session';
$string['selectteacher_help'] = 'Sélectionnez le moniteur qui suivra les candidats dans cette session';
$string['students'] = 'Candidats';
$string['teacher'] = 'moniteur';