<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Produtos Utilizados no contrato.
 *
 * @pw_element string $cAcaoProdUtilizados Pode ser:<BR>REM - Será gerado uma remessa dos produtos para o cliente.<BR>EST - Será gerado uma saída de estoque.  <BR>PED - Será gerado um pedido de venda.<BR><BR>Obrigatório na inclusão.
 * @pw_element string $cCodCategRem Código da Categoria da Remessa ou Pedido de Venda.<BR><BR>Obrigatório quando usar [cAcaoFaturamento] como 'REM' ou 'PED'.
 * @pw_element produtoUtilizadoArray $produtoUtilizado Produtos utilizados no serviço.
 * @pw_complex produtosUtilizados
 */
class ProdutosUtilizados{
	/**
	 * Pode ser:<BR>REM - Será gerado uma remessa dos produtos para o cliente.<BR>EST - Será gerado uma saída de estoque.  <BR>PED - Será gerado um pedido de venda.<BR><BR>Obrigatório na inclusão.
	 *
	 * @var string
	 */
	public string $cAcaoProdUtilizados;
	/**
	 * Código da Categoria da Remessa ou Pedido de Venda.<BR><BR>Obrigatório quando usar [cAcaoFaturamento] como 'REM' ou 'PED'.
	 *
	 * @var string
	 */
	public string $cCodCategRem;
	/**
	 * Produtos utilizados no serviço.
	 *
	 * @var ProdutoUtilizado[]
	 */
	public array $produtoUtilizado;
}
