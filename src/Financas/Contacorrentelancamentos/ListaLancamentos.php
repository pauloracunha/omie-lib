<?php

namespace OmieLib\Financas\Contacorrentelancamentos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;

/**
 * Lista de lançamentos de conta corrente.
 *
 * @pw_element integer $nCodLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do lançamento da conta corrente gerado pelo Omie.
 * @pw_element string $cCodIntLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
 * @pw_element integer $nCodAgrup Código do agrupamento do lançamento de conta corrente.
 * @pw_element cabecalho $cabecalho Cabeçalho do lançamento do conta corrente.
 * @pw_element detalhes $detalhes Detalhes do lançamento na conta corrente
 * @pw_element transferencia $transferencia Dados da transferência do lançamento do conta corrente
 * @pw_element departamentosArray $departamentos Distribuição por departamento do lançamento do conta corrente
 * @pw_element diversos $diversos Outras informações
 * @pw_element info $info Informações do cadastro
 * @pw_complex listaLancamentos
 */
class ListaLancamentos{
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
	 * Detalhes do lançamento na conta corrente
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
