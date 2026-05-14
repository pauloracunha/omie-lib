<?php

namespace OmieLib\Financas\Contacorrentelancamentos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\ACodCateg;
use OmieLib\Financas\Contacorrentelancamentos\Cabecalho;
use OmieLib\Financas\Contacorrentelancamentos\ContaCorrenteLancamentosJsonClient;
use OmieLib\Financas\Contacorrentelancamentos\Departamentos;
use OmieLib\Financas\Contacorrentelancamentos\Detalhes;
use OmieLib\Financas\Contacorrentelancamentos\Diversos;
use OmieLib\Financas\Contacorrentelancamentos\Info;
use OmieLib\Financas\Contacorrentelancamentos\ListaLancamentos;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Transferencia;

/**
 * Resposta da consulta de um lançamento do conta corrente
 *
 * @pw_element integer $nCodLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do lançamento da conta corrente gerado pelo Omie.
 * @pw_element string $cCodIntLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
 * @pw_element integer $nCodAgrup Código do agrupamento do lançamento de conta corrente.
 * @pw_element cabecalho $cabecalho Cabeçalho do lançamento do conta corrente.
 * @pw_element detalhes $detalhes Dados da transferência do lançamento do conta corrente
 * @pw_element transferencia $transferencia Dados da transferência do lançamento do conta corrente
 * @pw_element departamentosArray $departamentos Distribuição por departamento do lançamento do conta corrente
 * @pw_element diversos $diversos Outras informações
 * @pw_element info $info Informações do cadastro
 * @pw_complex lanccConsultarResponse
 */
class LanccConsultarResponse{
	/**
	 * Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do lançamento da conta corrente gerado pelo Omie.
	 *
	 * @var integer
	 */
	public int $nCodLanc;
	/**
	 * Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
	 *
	 * @var string
	 */
	public string $cCodIntLanc;
	/**
	 * Código do agrupamento do lançamento de conta corrente.
	 *
	 * @var integer
	 */
	public int $nCodAgrup;
	/**
	 * Cabeçalho do lançamento do conta corrente.
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $cabecalho;
	/**
	 * Dados da transferência do lançamento do conta corrente
	 *
	 * @var Detalhes
	 */
	public Detalhes $detalhes;
	/**
	 * Dados da transferência do lançamento do conta corrente
	 *
	 * @var Transferencia
	 */
	public Transferencia $transferencia;
	/**
	 * Distribuição por departamento do lançamento do conta corrente
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Outras informações
	 *
	 * @var Diversos
	 */
	public Diversos $diversos;
	/**
	 * Informações do cadastro
	 *
	 * @var Info
	 */
	public Info $info;
}
