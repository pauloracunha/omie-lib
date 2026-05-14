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
 * Solicitação de exclusão de um lançamento do conta corrente
 *
 * @pw_element integer $nCodLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do lançamento da conta corrente gerado pelo Omie.
 * @pw_element string $cCodIntLanc Código do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o lançamento da conta corrente utilizado no seu aplicativo quando incluir um Lançamento no Omie.
 * @pw_complex lanccExcluirRequest
 */
class LanccExcluirRequest{
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
}
