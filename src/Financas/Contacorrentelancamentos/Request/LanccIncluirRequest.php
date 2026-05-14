<?php

namespace OmieLib\Financas\Contacorrentelancamentos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\ACodCateg;
use OmieLib\Financas\Contacorrentelancamentos\Cabecalho;
use OmieLib\Financas\Contacorrentelancamentos\ContaCorrenteLancamentosJsonClient;
use OmieLib\Financas\Contacorrentelancamentos\Departamentos;
use OmieLib\Financas\Contacorrentelancamentos\Detalhes;
use OmieLib\Financas\Contacorrentelancamentos\Diversos;
use OmieLib\Financas\Contacorrentelancamentos\Info;
use OmieLib\Financas\Contacorrentelancamentos\ListaLancamentos;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Transferencia;

/**
 * Solicitação de inclusão lançamento do conta corrente
 *
 * @pw_element string $cCodIntLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
 * @pw_element cabecalho $cabecalho Cabeçalho do lançamento do conta corrente.
 * @pw_element detalhes $detalhes Detalhes do lançamento na conta corrente
 * @pw_element transferencia $transferencia Dados da transferência do lançamento do conta corrente
 * @pw_element departamentosArray $departamentos Distribuição por departamento do lançamento do conta corrente
 * @pw_complex lanccIncluirRequest
 */
class LanccIncluirRequest{
	/**
	 * Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
	 *
	 * @var string
	 */
	public string $cCodIntLanc;
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
}
