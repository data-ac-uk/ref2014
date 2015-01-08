<?xml version="1.0" encoding='utf-8'?>
<xsl:stylesheet version="1.0" 

    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
    xmlns:owl="http://www.w3.org/2002/07/owl#"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema#"

    xmlns:foaf="http://xmlns.com/foaf/0.1/"
    xmlns:aiiso="http://purl.org/vocab/aiiso/schema#"
    xmlns:ref="http://id.ref2014.data.ac.uk/ns/"

    xmlns:g="http://purl.org/openorg/grinder/ns/"
>

  <xsl:output method="xml" version="1.0" encoding="UTF-8" indent="yes" omit-xml-declaration="no" />

  <xsl:template match="/g:grinder-data">
    <rdf:RDF>
      <xsl:comment>TOP</xsl:comment>
      <xsl:apply-templates select="g:row" /> 
    </rdf:RDF>
  </xsl:template>
<!--
        <institution-code-ukprn>10000291</institution-code-ukprn>
        <institution-name>Anglia Ruskin University</institution-name>
        <institution-sort-order>10</institution-sort-order>
        <main-panel>A</main-panel>
        <unit-of-assessment-number>3</unit-of-assessment-number>
        <unit-of-assessment-name>Allied Health Professions, Dentistry, Nursing and Pharmacy</unit-of-assessment-name>
        <multiple-submission-letter></multiple-submission-letter>
        <multiple-submission-name></multiple-submission-name>
        <joint-submission></joint-submission>
        <profile>Outputs</profile>
        <fte-category-a-staff-submitted>11.30</fte-category-a-staff-submitted>
        <n4>6.4</n4>
        <n3>68.1</n3>
        <n2>25.5</n2>
        <n1>0.0</n1>
        <unclassified>0.0</unclassified>
-->

  <xsl:template match="g:row">
    <xsl:variable name="profileuri">http://id.ref2014.data.ac.uk/profile/<xsl:value-of select='g:profile' /></xsl:variable>
    <xsl:variable name="suburi">http://id.ref2014.data.ac.uk/submision/<xsl:value-of select='g:main-panel' />-<xsl:value-of select='g:unit-of-assessment-number' />-<xsl:value-of select='g:institution-code-ukprn' /><xsl:if test='g:multiple-submission-letter/text()'>-<xsl:value-of select='g:multiple-submission-letter' /></xsl:if>-<xsl:value-of select='g:profile' /></xsl:variable>
    <xsl:variable name="orguri">http://id.learning-provider.data.ac.uk/ukprn/<xsl:value-of select='g:institution-code-ukprn' /></xsl:variable>
    <xsl:variable name="paneluri">http://id.ref2014.data.ac.uk/panel/<xsl:value-of select='g:main-panel' /></xsl:variable>
    <xsl:variable name="unituri">http://id.ref2014.data.ac.uk/unit/<xsl:value-of select='g:unit-of-assessment-number' /></xsl:variable>
    <ref:Profile rdf:about="{$profileuri}">
      <rdfs:label><xsl:value-of select='g:profile' /></rdfs:label>
    </ref:Profile>
    <ref:Panel rdf:about="{$paneluri}">
      <rdfs:label>Panel <xsl:value-of select='g:main-panel' /></rdfs:label>
    </ref:Panel>
    <ref:Unit rdf:about="{$unituri}">
      <rdfs:label><xsl:value-of select='g:unit-of-assessment-name' /></rdfs:label>
      <ref:unitPanel rdf:resource="{$paneluri}" />
    </ref:Unit>
    <ref:Institution rdf:about="{$orguri}">
      <rdf:type rdf:resource="http://purl.org/vocab/aiiso/schema#Institution" />
      <rdf:type rdf:resource="http://xmlns.com/foaf/0.1/Organization" />
      <foaf:name><xsl:value-of select='g:institution-name' /></foaf:name>
      <ref:sortOrder rdf:datatype="http://www.w3.org/2001/XMLSchema#integer"><xsl:value-of select='g:institution-sort-order' /></ref:sortOrder>
    </ref:Institution>
    <ref:Submission rdf:about="{$suburi}">
      <rdfs:label><xsl:value-of select='g:profile' /> results from submission of <xsl:value-of select='g:institution-name' /> to <xsl:value-of select='g:unit-of-assessment-name' /><xsl:if test='g:multiple-submission-letter/text()'> (<xsl:value-of select='g:multiple-submission-letter' />: <xsl:value-of select='g:multiple-submission-name' />)</xsl:if><xsl:if test='g:joint-submission/text()'> (<xsl:value-of select='g:joint-submission' />)</xsl:if> 
</rdfs:label>
      <ref:submissionPanel rdf:resource="{$paneluri}" />
      <ref:submissionUnit rdf:resource="{$unituri}" />
      <ref:submissionInstitution rdf:resource="{$orguri}" />
      <ref:submissionProfile rdf:resource="{$profileuri}" />
      <xsl:if test='g:multiple-submission-letter/text()'>
        <ref:multiLetter><xsl:value-of select='g:multiple-submission-letter' /></ref:multiLetter>
        <ref:multiName><xsl:value-of select='g:multiple-submission-name' /></ref:multiName>
      </xsl:if>
      <xsl:if test='g:joint-submission/text()'>
        <ref:joint><xsl:value-of select='g:joint-submission' /></ref:joint>
      </xsl:if>
      <ref:aStaff rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:fte-category-a-staff-submitted'/></ref:aStaff>
      <ref:grade4 rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:n4'/></ref:grade4>
      <ref:grade3 rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:n3'/></ref:grade3>
      <ref:grade2 rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:n2'/></ref:grade2>
      <ref:grade1 rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:n1'/></ref:grade1>
      <ref:gradeU rdf:datatype="http://www.w3.org/2001/XMLSchema#float"><xsl:value-of select='g:unclassified'/></ref:gradeU>
    </ref:Submission>
  </xsl:template>

</xsl:stylesheet>


