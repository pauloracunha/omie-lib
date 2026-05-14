<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Departamentos da NFe de recebimento
 *
 * @pw_element string $cCodDepartamento Código do departamento. <BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>/api/v1/geral/departamentos/ para obter essa informação.
 * @pw_element decimal $vDepartamento Valor do rateio.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.
 * @pw_element decimal $pDepartamento Percentual de rateio. <BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * Código do departamento. <BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>/api/v1/geral/departamentos/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodDepartamento;
	/**
	 * Valor do rateio.<BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.
	 *
	 * @var decimal
	 */
	public float $vDepartamento;
	/**
	 * Percentual de rateio. <BR><BR>Preenchimento obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do recebimento de NFe.
	 *
	 * @var decimal
	 */
	public float $pDepartamento;
}
