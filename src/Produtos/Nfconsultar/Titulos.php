<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Titulos gerados para a nota fiscal.
 *
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntTitulo Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cNumTitulo Número do título.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $dDtEmissao Data de emissão do título.
 * @pw_element string $dDtVenc Data de vencimento do título.<BR>
 * @pw_element string $dDtPrevisao Data de previsão de Pagamento/Recebimento.
 * @pw_element decimal $nValorTitulo Valor do título.
 * @pw_element string $cCodCateg Código da Categoria.
 * @pw_element string $dReg Data de Registro.
 * @pw_element integer $nParcela Número da parcela.
 * @pw_element integer $nTotParc Número total de parcelas
 * @pw_element integer $nCodProjeto Código do Projeto
 * @pw_element integer $nCodVendedor Código do Vendedor
 * @pw_element integer $nCodComprador Número do Comprador
 * @pw_element integer $nCodTitRepet Código do título da repetição.<BR>
 * @pw_element string $cDoc Código para o Tipo de Documento
 * @pw_element string $cPagForma Forma de Pagamento
 * @pw_complex titulos
 */
class Titulos{
	/**
	 * Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntTitulo;
	/**
	 * Número do título.<BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumTitulo;
	/**
	 * Data de emissão do título.
	 *
	 * @var string
	 */
	public string $dDtEmissao;
	/**
	 * Data de vencimento do título.<BR>
	 *
	 * @var string
	 */
	public string $dDtVenc;
	/**
	 * Data de previsão de Pagamento/Recebimento.
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Valor do título.
	 *
	 * @var decimal
	 */
	public float $nValorTitulo;
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Data de Registro.
	 *
	 * @var string
	 */
	public string $dReg;
	/**
	 * Número da parcela.
	 *
	 * @var integer
	 */
	public int $nParcela;
	/**
	 * Número total de parcelas
	 *
	 * @var integer
	 */
	public int $nTotParc;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $nCodProjeto;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVendedor;
	/**
	 * Número do Comprador
	 *
	 * @var integer
	 */
	public int $nCodComprador;
	/**
	 * Código do título da repetição.<BR>
	 *
	 * @var integer
	 */
	public int $nCodTitRepet;
	/**
	 * Código para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $cDoc;
	/**
	 * Forma de Pagamento
	 *
	 * @var string
	 */
	public string $cPagForma;
}
