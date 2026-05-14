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
 * Categorias da NFe de recebimento
 *
 * @pw_element string $cCategoria Código da categoria.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
 * @pw_element decimal $vCategoria Valor do Rateio
 * @pw_element decimal $pCategoria Percentual de Rateio
 * @pw_complex categorias
 */
class Categorias{
	/**
	 * Código da categoria.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Valor do Rateio
	 *
	 * @var decimal
	 */
	public float $vCategoria;
	/**
	 * Percentual de Rateio
	 *
	 * @var decimal
	 */
	public float $pCategoria;
}
