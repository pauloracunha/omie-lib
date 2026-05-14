<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Produtos Utilizados na Ordem de Serviço.
 *
 * @pw_element string $cAcaoProdUtilizados Pode ser:<BR>REM - Será gerado uma remessa dos produtos para o cliente.<BR>EST - Será gerado uma saída de estoque.  <BR><BR>Obrigatório na inclusão.
 * @pw_element string $cCodCategRem Código da Categoria da Remessa ou Pedido de Venda.<BR><BR>Obrigatório quando usar cAcaoFaturamento como 'REM' ou 'PED'
 * @pw_element produtoUtilizadoArray $produtoUtilizado rodutos utilizados no serviço.
 * @pw_complex produtosUtilizados
 */
class ProdutosUtilizados{
	/**
	 * Pode ser:<BR>REM - Será gerado uma remessa dos produtos para o cliente.<BR>EST - Será gerado uma saída de estoque.  <BR><BR>Obrigatório na inclusão.
	 *
	 * @var string
	 */
	public string $cAcaoProdUtilizados;
	/**
	 * Código da Categoria da Remessa ou Pedido de Venda.<BR><BR>Obrigatório quando usar cAcaoFaturamento como 'REM' ou 'PED'
	 *
	 * @var string
	 */
	public string $cCodCategRem;
	/**
	 * rodutos utilizados no serviço.
	 *
	 * @var ProdutoUtilizado[]
	 */
	public array $produtoUtilizado;
}
